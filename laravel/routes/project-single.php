<?php
require_once 'includes/data.php';

$slug = $_GET['slug'] ?? '';
if (!isset($projects[$slug])) {
    http_response_code(404);
    require 'routes/not-found.php';
    exit;
}

$p = $projects[$slug];
$all_slugs = array_keys($projects);
$current_idx = array_search($slug, $all_slugs);
$prev_slug = $all_slugs[$current_idx - 1] ?? null;
$next_slug = $all_slugs[$current_idx + 1] ?? null;

$page_title = $p['title'];
$page_desc  = $p['description'];
require 'includes/header.php';
?>

<section class="page-hero page-hero--project">
    <div class="container">
        <a href="/projects" class="back-link">← All of My Projects Here</a>
        <div class="project-hero-meta">
            <span class="tech-pill"><?= htmlspecialchars($p['category']) ?></span>
            <span class="project-year"><?= $p['year'] ?></span>
        </div>
        <h1 class="page-title"><?= htmlspecialchars($p['title']) ?></h1>
        <p class="page-subtitle"><?= htmlspecialchars($p['description']) ?></p>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <div class="project-showcase" data-project="<?= $p['image'] ?>">
            <div class="project-showcase-inner">
                <div class="showcase-window-bar">
                    <span></span><span></span><span></span>
                </div>
                <div class="showcase-content-area">
                    <span class="showcase-label"><?= htmlspecialchars($p['title']) ?></span>
                </div>
            </div>
        </div>

        <div class="project-details-grid">
            <div class="project-details-main">
                <h2>Overview</h2>
                <p><?= htmlspecialchars($p['long']) ?></p>
            </div>
            <div class="project-details-sidebar">
                <div class="sidebar-block">
                    <span class="sidebar-label">Technologies</span>
                    <div class="tech-stack">
                        <?php foreach ($p['tech'] as $t): ?>
                            <span class="tech-pill"><?= htmlspecialchars($t) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="sidebar-block">
                    <span class="sidebar-label">Year</span>
                    <span class="sidebar-value"><?= $p['year'] ?></span>
                </div>
                <div class="sidebar-block">
                    <span class="sidebar-label">Category</span>
                    <span class="sidebar-value"><?= htmlspecialchars($p['category']) ?></span>
                </div>
                <?php if ($p['link'] !== '#'): ?>
                <a href="<?= htmlspecialchars($p['link']) ?>" target="_blank" rel="noopener" class="btn btn--primary">
                    View Live →
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="section project-nav">
    <div class="container">
        <div class="project-nav-inner">
            <?php if ($prev_slug): ?>
            <a href="/projects/<?= $prev_slug ?>" class="project-nav-item project-nav-item--prev">
                <span>← Previous</span>
                <strong><?= htmlspecialchars($projects[$prev_slug]['title']) ?></strong>
            </a>
            <?php endif; ?>
            <?php if ($next_slug): ?>
            <a href="/projects/<?= $next_slug ?>" class="project-nav-item project-nav-item--next">
                <span>Next →</span>
                <strong><?= htmlspecialchars($projects[$next_slug]['title']) ?></strong>
            </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>