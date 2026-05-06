<?php
require_once 'includes/data.php';
$page_title = 'Contact';
$page_desc  = 'Get in touch with ' . SITE_NAME;
$success    = isset($_GET['sent']) && $_GET['sent'] === '1';
require 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="page-eyebrow">Contact</p>
        <h1 class="page-title">Let's build something <em>functional.</em></h1>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">
        <div class="contact-info">
            <p class="contact-intro">
                I'm open to freelance projects, full-time opportunities, and interesting
                conversations. Call or message me... and I respond within 24 hours.
            </p>

            <div class="contact-item">
                <span class="contact-item-label">Email</span>
                <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
            </div>
            <div class="contact-item">
                <span class="contact-item-label">GitHub</span>
                <a href="<?= SITE_GITHUB ?>" target="_blank" rel="noopener"><?= str_replace('https://', '', SITE_GITHUB) ?></a>
            </div>
            <div class="contact-item">
                <span class="contact-item-label">LinkedIn</span>
                <a href="<?= SITE_LINKEDIN ?>" target="_blank" rel="noopener"><?= str_replace('https://', '', SITE_LINKEDIN) ?></a>
            </div>

            <div class="availability-card">
                <span class="dot dot--green"></span>
                <div>
                    <strong>Available for new projects</strong>
                    <p>Estimated availability: Q3 2026</p>
                </div>
            </div>
        </div>

        <div class="contact-form-wrap">
            <?php if ($success): ?>
            <div class="form-success">
                <span class="form-success-icon">✓</span>
                <h3>Message sent!</h3>
                <p>Thanks for reaching out. I'll get back to you within 24 hours.</p>
            </div>
            <?php else: ?>
            <form class="contact-form" action="/contact" method="POST">
                <div class="form-row">
                    <div class="form-field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Juan de la Cruz" required>
                    </div>
                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="juandelacruz1898@example.com" required>
                    </div>
                </div>
                <div class="form-field">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Project inquiry / Job opportunity / Just saying hi">
                </div>
                <div class="form-field">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="6" placeholder="Tell me about your project, timeline, and budget..." required></textarea>
                </div>
                <button type="submit" class="btn btn--primary btn--full">Send Message Here→</button>
            </form>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>