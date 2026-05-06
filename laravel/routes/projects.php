<?php
require_once 'includes/data.php';
$page_title = 'Projects';
$page_desc  = 'Selected work by ' . SITE_NAME;
require 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="page-eyebrow">Work</p>
        <h1 class="page-title">Selected <em>projects.</em></h1>
        <p class="page-subtitle">Here are the products that I created for the project.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="project-list">
            <?php foreach ($projects as $slug => $p): ?>
            <article class="project-row">
                <a href="/projects/<?= $slug ?>" class="project-row-inner">
                    <div class="project-row-num">
                        <?= str_pad(array_search($slug, array_keys($projects)) + 1, 2, '0', STR_PAD_LEFT) ?>
                    </div>
                    <div class="project-row-img" data-project="<?= $p['image'] ?>"></div>
                    <div class="project-row-body">
                        <div class="project-row-meta">
                            <span class="project-row-cat"><?= htmlspecialchars($p['category']) ?></span>
                            <span><?= $p['year'] ?></span>
                        </div>
                        <h2 class="project-row-title"><?= htmlspecialchars($p['title']) ?></h2>
                        <p class="project-row-desc"><?= htmlspecialchars($p['description']) ?></p>
                        <div class="project-row-tech">
                            <?php foreach ($p['tech'] as $t): ?>
                                <span class="tech-pill"><?= htmlspecialchars($t) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="project-row-arrow">→</div>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>