<?php
require_once 'includes/data.php';

$slug = $_GET['slug'] ?? '';
if (!isset($blog_posts[$slug])) {
    http_response_code(404);
    require 'routes/not-found.php';
    exit;
}

$post = $blog_posts[$slug];
$page_title = $post['title'];
$page_desc  = $post['excerpt'];
require 'includes/header.php';
?>

<article class="blog-article">
    <header class="blog-article-header">
        <div class="container container--narrow">
            <a href="/blog" class="back-link">← All Posts</a>
            <div class="blog-article-meta">
                <span class="blog-card-cat"><?= htmlspecialchars($post['category']) ?></span>
                <span><?= htmlspecialchars($post['date']) ?></span>
                <span><?= htmlspecialchars($post['read']) ?></span>
            </div>
            <h1 class="blog-article-title"><?= htmlspecialchars($post['title']) ?></h1>
            <p class="blog-article-lead"><?= htmlspecialchars($post['excerpt']) ?></p>
        </div>
    </header>

    <div class="blog-article-body">
        <div class="container container--narrow">
            <?php foreach ($post['body'] as $para): ?>
            <p><?= htmlspecialchars($para) ?></p>
            <?php endforeach; ?>

            <div class="article-footer-note">
                <p>
                    Thanks for reading this. If you have further inquiries —
                    <a href="/contact">reach out</a> or find me on
                    <a href="<?= SITE_GITHUB ?>" target="_blank" rel="noopener">GitHub</a>.
                </p>
            </div>
        </div>
    </div>
</article>

<section class="section">
    <div class="container container--narrow">
        <h2 class="section-title-sm">More Posts Here</h2>
        <div class="blog-list-preview">
            <?php foreach ($blog_posts as $other_slug => $other_post):
                if ($other_slug === $slug) continue; ?>
            <a href="/blog/<?= $other_slug ?>" class="blog-row">
                <span class="blog-row-cat"><?= htmlspecialchars($other_post['category']) ?></span>
                <span class="blog-row-title"><?= htmlspecialchars($other_post['title']) ?></span>
                <span class="blog-row-meta"><?= $other_post['read'] ?> · <?= $other_post['date'] ?></span>
                <span class="blog-row-arrow">→</span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>