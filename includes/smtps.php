<?php
// smtps.php - SMTP Configuration for sending emails
// Uses PHPMailer library (https://github.com/PHPMailer/PHPMailer)

// SMTP Configuration
define('SMTP_HOST', 'smtp.gmail.com'); // Change to your SMTP host (e.g., smtp.gmail.com, smtp.outlook.com)
define('SMTP_PORT', 587); // TLS port (465 for SSL)
define('SMTP_USER', 'your-email@gmail.com'); // Your email address
define('SMTP_PASS', 'your-app-password'); // Your email password or app password
define('SMTP_SECURE', 'tls'); // tls or ssl
define('SMTP_FROM', 'info@infinitysofthub.com'); // From email address
define('SMTP_FROM_NAME', 'Infinity SoftHub'); // From name
define('SMTP_REPLY_TO', 'info@infinitysofthub.com'); // Reply-to email

// Recipient for chatbot leads
define('LEAD_RECEIVER_EMAIL', 'info@infinitysofthub.com'); // Where to send lead notifications
define('LEAD_RECEIVER_NAME', 'Infinity SoftHub Team');

/**
 * Send email using SMTP
 * Requires PHPMailer: composer require phpmailer/phpmailer
 * Or download from: https://github.com/PHPMailer/PHPMailer
 */
function send_smtp_email($to_email, $to_name, $subject, $body_html, $body_text = '') {
    // Check if PHPMailer exists
    $phpmailer_paths = [
        __DIR__ . '/../vendor/phpmailer/phpmailer/src/PHPMailer.php',
        __DIR__ . '/../PHPMailer/PHPMailer.php',
    ];

    $phpmailer_loaded = false;
    foreach ($phpmailer_paths as $path) {
        if (file_exists($path)) {
            require_once $path;
            $phpmailer_loaded = true;
            break;
        }
    }

    // Fallback to PHP mail() if PHPMailer not available
    if (!$phpmailer_loaded) {
        $headers = "From: " . SMTP_FROM_NAME . " <" . SMTP_FROM . ">\r\n";
        $headers .= "Reply-To: " . SMTP_REPLY_TO . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        return mail($to_email, $subject, $body_html, $headers);
    }

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    try {
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASS;
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Port = SMTP_PORT;

        $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
        $mail->addReplyTo(SMTP_REPLY_TO);
        $mail->addAddress($to_email, $to_name);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body_html;
        $mail->AltBody = $body_text ?: strip_tags($body_html);

        return $mail->send();
    } catch (Exception $e) {
        error_log("SMTP Email Error: " . $mail->ErrorInfo);
        return false;
    }
}

/**
 * Send lead notification email
 */
function send_lead_notification($name, $email, $mobile, $message) {
    $subject = "New Chatbot Lead from " . $name;

    $body_html = '
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #062B6F; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f5f7fb; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #062B6F; }
            .value { margin-top: 5px; padding: 10px; background: white; border-radius: 5px; }
            .footer { padding: 20px; text-align: center; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>New Chatbot Lead</h2>
            </div>
            <div class="content">
                <div class="field">
                    <div class="label">Name:</div>
                    <div class="value">' . htmlspecialchars($name) . '</div>
                </div>
                <div class="field">
                    <div class="label">Email:</div>
                    <div class="value"><a href="mailto:' . htmlspecialchars($email) . '">' . htmlspecialchars($email) . '</a></div>
                </div>
                <div class="field">
                    <div class="label">Mobile:</div>
                    <div class="value"><a href="tel:' . htmlspecialchars($mobile) . '">' . htmlspecialchars($mobile) . '</a></div>
                </div>
                <div class="field">
                    <div class="label">Message:</div>
                    <div class="value">' . nl2br(htmlspecialchars($message)) . '</div>
                </div>
            </div>
            <div class="footer">
                <p>Sent from Infinity SoftHub Chatbot</p>
            </div>
        </div>
    </body>
    </html>';

    return send_smtp_email(LEAD_RECEIVER_EMAIL, LEAD_RECEIVER_NAME, $subject, $body_html);
}

/**
 * Send thank you email to user
 */
function send_lead_thank_you($name, $email) {
    $subject = "Thank you for contacting Infinity SoftHub!";

    $body_html = '
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #062B6F; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f5f7fb; }
            .footer { padding: 20px; text-align: center; font-size: 12px; color: #666; }
            .btn { display: inline-block; padding: 12px 24px; background: #2563EB; color: white; text-decoration: none; border-radius: 5px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Thank You, ' . htmlspecialchars($name) . '!</h2>
            </div>
            <div class="content">
                <p>We have received your message and our team will get back to you within 24 hours.</p>
                <p>In the meantime, feel free to explore our services:</p>
                <p style="text-align: center;">
                    <a href="' . SITE_URL . 'services/web-development.php" class="btn">View Our Services</a>
                </p>
            </div>
            <div class="footer">
                <p>Infinity SoftHub Technologies</p>
                <p>Email: info@infinitysofthub.com | Phone: +91-120-5146-341</p>
            </div>
        </div>
    </body>
    </html>';

    return send_smtp_email($email, $name, $subject, $body_html);
}
?>
