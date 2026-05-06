<?php
if (!defined('SITE_NAME')) {
    require_once 'includes/data.php';
}
$page_title = '404 — Not Found';
require 'includes/header.php';
?>

<section class="error-page">
    <div class="container">
        <p class="error-code">404</p>
        <h1 class="error-title">This page<br><em>is nawawala.</em></h1>
        <p class="error-subtitle">The page you're looking for has been moved, deleted, or non-existent.</p>
        <a href="/" class="btn btn--primary">Home →</a>
    </div>
</section>

<?php require 'includes/footer.php'; ?>