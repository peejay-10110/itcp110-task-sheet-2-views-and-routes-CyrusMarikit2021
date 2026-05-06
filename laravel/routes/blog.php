<?php
require_once 'includes/data.php';
$page_title = 'Blog';
$page_desc  = 'Writing by ' . SITE_NAME . ' on functionality and identity.';
require 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="page-eyebrow">Writing</p>
        <h1 class="page-title">Notes on <em>functionality and identity.</em></h1>
        <p class="page-subtitle">Occasional long-form thoughts on functionality and identity.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="blog-grid">
            <?php foreach ($blog_posts as $slug => $post): ?>
            <article class="blog-card">
                <a href="/blog/<?= $slug ?>" class="blog-card-inner">
                    <div class="blog-card-top">
                        <span class="blog-card-cat"><?= htmlspecialchars($post['category']) ?></span>
                        <span class="blog-card-read"><?= htmlspecialchars($post['read']) ?></span>
                    </div>
                    <h2 class="blog-card-title"><?= htmlspecialchars($post['title']) ?></h2>
                    <p class="blog-card-excerpt"><?= htmlspecialchars($post['excerpt']) ?></p>
                    <div class="blog-card-footer">
                        <span class="blog-card-date"><?= htmlspecialchars($post['date']) ?></span>
                        <span class="blog-card-arrow">Read →</span>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>