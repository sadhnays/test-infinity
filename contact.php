<?php
$pageTitle = 'Contact Us | Infinity SoftHub - Enterprise IT Solutions';
$pageDescription = 'Contact Infinity SoftHub for expert IT consulting, digital transformation, and enterprise solutions. Get in touch with our team today.';
$pageKeywords = 'Contact Infinity SoftHub, IT consulting contact, enterprise solutions, digital transformation inquiry';
$activePage = 'contact';

require_once 'includes/config.php';
require_once 'includes/functions.php';

// Initialize variables
$errors = [];
$success = false;

// Generate CSRF token
if (empty($_SESSION['csrf_token'] ?? '')) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verify CSRF token
    $submittedToken = filter_input(INPUT_POST, 'csrf_token', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($submittedToken) || !hash_equals($_SESSION['csrf_token'] ?? '', $submittedToken)) {
        $errors[] = 'Invalid CSRF token. Please try again.';
    } else {
        // Sanitize and validate inputs
        $name = sanitize_input(filter_input(INPUT_POST, 'name', FILTER_DEFAULT) ?? '');
        $email = sanitize_input(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');
        $phone = sanitize_input(filter_input(INPUT_POST, 'phone', FILTER_DEFAULT) ?? '');
        $subject = sanitize_input(filter_input(INPUT_POST, 'subject', FILTER_DEFAULT) ?? '');
        $message = sanitize_input(filter_input(INPUT_POST, 'message', FILTER_DEFAULT) ?? '');

        // Validation
        if (empty($name)) { $errors[] = 'Name is required.'; }
        if (empty($email)) {
            $errors[] = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email format.';
        }
        if (empty($subject)) { $errors[] = 'Subject is required.'; }
        if (empty($message)) { $errors[] = 'Message is required.'; }

        // If no errors, process form (send email or save to database)
        if (empty($errors)) {
            // Here you would typically send an email or save to database
            $success = true;
            // Regenerate CSRF token after successful submission
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
    }
}
?>
<?php require_once 'includes/header.php'; ?>

    <!-- Page Hero -->
    <section class="page-hero" data-aos="fade-up">
        <div class="container">
            <h1>Contact <span class="gradient-text">Us</span></h1>
            <p>Get in touch with our team for enterprise IT solutions</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section">
        <div class="container" style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:start;">
            <!-- Contact Form -->
            <div data-aos="fade-right">
                <h2 class="section-title" style="text-align:left;">Send Us a Message</h2>
                <div class="blue-underline"></div>

                <?php if ($success): ?>
                    <div style="background:#10B981; color:white; padding:1rem; border-radius:var(--radius-sm); margin-bottom:2rem;">
                        <i class="fas fa-check-circle"></i> Thank you! Your message has been sent successfully.
                    </div>
                <?php endif; ?>

                <?php if (!empty($errors)): ?>
                    <div style="background:#EF4444; color:white; padding:1rem; border-radius:var(--radius-sm); margin-bottom:2rem;">
                        <ul style="margin:0; padding-left:1.5rem;">
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form method="POST" action="" style="display:flex; flex-direction:column; gap:1.5rem;">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div>
                            <label style="display:block; margin-bottom:0.5rem; font-weight:500;">Name *</label>
                            <input type="text" name="name" required style="width:100%; padding:12px 16px; border:1px solid var(--border); border-radius:var(--radius-sm); font-family:var(--font-family);">
                        </div>
                        <div>
                            <label style="display:block; margin-bottom:0.5rem; font-weight:500;">Email *</label>
                            <input type="email" name="email" required style="width:100%; padding:12px 16px; border:1px solid var(--border); border-radius:var(--radius-sm); font-family:var(--font-family);">
                        </div>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div>
                            <label style="display:block; margin-bottom:0.5rem; font-weight:500;">Phone</label>
                            <input type="tel" name="phone" style="width:100%; padding:12px 16px; border:1px solid var(--border); border-radius:var(--radius-sm); font-family:var(--font-family);">
                        </div>
                        <div>
                            <label style="display:block; margin-bottom:0.5rem; font-weight:500;">Subject *</label>
                            <input type="text" name="subject" required style="width:100%; padding:12px 16px; border:1px solid var(--border); border-radius:var(--radius-sm); font-family:var(--font-family);">
                        </div>
                    </div>

                    <div>
                        <label style="display:block; margin-bottom:0.5rem; font-weight:500;">Message *</label>
                        <textarea name="message" rows="5" required style="width:100%; padding:12px 16px; border:1px solid var(--border); border-radius:var(--radius-sm); font-family:var(--font-family); resize:vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="align-self:flex-start;">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div data-aos="fade-left">
                <h2 class="section-title" style="text-align:left;">Get in Touch</h2>
                <div class="blue-underline"></div>

                <div style="display:flex; flex-direction:column; gap:2rem; margin-top:2rem;">
                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="width:50px; height:50px; background:var(--bg-light); border-radius:50%; display:flex; align-items:center; justify-content:center; color:var(--accent);">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom:0.5rem;">Our Location</h4>
                            <p style="color:var(--text-gray);">5th Floor, HB Twin Tower, Netaji Subhash Place, New Delhi - 110034, India</p>
                        </div>
                    </div>

                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="width:50px; height:50px; background:var(--bg-light); border-radius:50%; display:flex; align-items:center; justify-content:center; color:var(--accent);">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom:0.5rem;">Call Us</h4>
                            <p style="color:var(--text-gray);">+91-120-5146-341</p>
                        </div>
                    </div>

                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="width:50px; height:50px; background:var(--bg-light); border-radius:50%; display:flex; align-items:center; justify-content:center; color:var(--accent);">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom:0.5rem;">Email Us</h4>
                            <p style="color:var(--text-gray);">info@infinitysofthub.com</p>
                        </div>
                    </div>
                </div>

                <!-- Office Hours -->
                <div style="margin-top:3rem; padding:2rem; background:var(--bg-light); border-radius:var(--radius-md);">
                    <h4 style="margin-bottom:1rem;">Office Hours</h4>
                    <p style="color:var(--text-gray); margin-bottom:0.5rem;">Monday - Friday: 9:00 AM - 6:00 PM</p>
                    <p style="color:var(--text-gray);">Saturday - Sunday: Closed</p>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
