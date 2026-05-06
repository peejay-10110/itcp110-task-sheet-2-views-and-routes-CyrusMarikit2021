<?php
require_once 'includes/data.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /contact');
    exit;
}

$name    = trim(strip_tags($_POST['name'] ?? ''));
$email   = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));
$subject = trim(strip_tags($_POST['subject'] ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

$errors = [];
if (empty($name))    $errors[] = 'Name is required. Cannot be empty.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email required. Cannot be empty.';
if (empty($message)) $errors[] = 'Message is required. Cannot be empty.';

if (empty($errors)) {
    // In production: use a mailer library like PHPMailer / Symfony Mailer
    // mail(SITE_EMAIL, "Portfolio: $subject", "From: $name <$email>\n\n$message");

    header('Location: /contact?sent=1');
    exit;
}

// Re-render contact form with errors
$page_title = 'Contact';
require 'includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <p class="page-eyebrow">Contact</p>
        <h1 class="page-title">Let's build something <em>functional.</em></h1>
    </div>
</section>
<section class="section">
    <div class="container container--narrow">
        <div class="form-errors">
            <?php foreach ($errors as $err): ?>
                <p>⚠ <?= htmlspecialchars($err) ?></p>
            <?php endforeach; ?>
        </div>
        <a href="/contact" class="btn btn--ghost">← Return to previous</a>
    </div>
</section>
<?php require 'includes/footer.php'; ?>