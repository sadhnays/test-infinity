<?php
// chatbot-lead.php - Handle chatbot lead submission
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN'] ?? '*');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

require_once 'includes/config.php';
require_once 'includes/functions.php';
require_once 'includes/smtps.php';

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

// Fallback to POST data
if (empty($input)) {
    $input = $_POST;
}

// Sanitize inputs
$name = sanitize_input($input['name'] ?? '');
$email = sanitize_input($input['email'] ?? '');
$mobile = sanitize_input($input['mobile'] ?? '');
$message = sanitize_input($input['message'] ?? '');

// Validate
if (empty($name) || empty($email) || empty($mobile)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}

if (!validate_email($email)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

// Create table if not exists
try {
    $pdo = get_db_connection();
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS chatbot_leads (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            mobile VARCHAR(50) NOT NULL,
            message TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            status ENUM('new', 'contacted', 'converted') DEFAULT 'new',
            INDEX idx_email (email),
            INDEX idx_created (created_at)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
    ");
} catch (Exception $e) {
    error_log("Table creation failed: " . $e->getMessage());
}

// Check for duplicate (same email in last 24 hours)
try {
    $pdo = get_db_connection();
    $stmt = $pdo->prepare("
        SELECT id FROM chatbot_leads
        WHERE email = ? AND created_at > DATE_SUB(NOW(), INTERVAL 24 HOUR)
        LIMIT 1
    ");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(['success' => true, 'message' => 'We already received your information. Our team will contact you soon!']);
        exit;
    }
} catch (Exception $e) {
    // Continue if check fails
}

// Save to database
try {
    $pdo = get_db_connection();
    $stmt = $pdo->prepare("
        INSERT INTO chatbot_leads (name, email, mobile, message)
        VALUES (?, ?, ?, ?)
    ");
    $stmt->execute([$name, $email, $mobile, $message]);

    $lead_id = $pdo->lastInsertId();
} catch (Exception $e) {
    error_log("Lead save failed: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Failed to save your information. Please email us at info@infinitysofthub.com']);
    exit;
}

// Send notification email to admin
$email_sent = false;
try {
    $email_sent = send_lead_notification($name, $email, $mobile, $message);
} catch (Exception $e) {
    error_log("Lead notification email failed: " . $e->getMessage());
}

// Send thank you email to user
try {
    send_lead_thank_you($name, $email);
} catch (Exception $e) {
    error_log("Thank you email failed: " . $e->getMessage());
}

// Log the lead
error_log("Chatbot Lead: ID=$lead_id, Name=$name, Email=$email, Mobile=$mobile");

echo json_encode([
    'success' => true,
    'message' => 'Thank you! Our team will contact you within 24 hours.',
    'email_sent' => $email_sent
]);
exit;
?>
