<?php
require_once 'includes/data.php';
$page_title = 'Skills';
$page_desc  = 'Technical skills and expertise of ' . SITE_NAME;
require 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="page-eyebrow">Skills</p>
        <h1 class="page-title">The <em>toolkit.</em></h1>
        <p class="page-subtitle">Two years of learning coding, and still progressing.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="skills-wrapper">
            <?php foreach ($skills as $category => $skill_list): ?>
            <div class="skill-category">
                <h2 class="skill-category-title"><?= htmlspecialchars($category) ?></h2>
                <div class="skill-list">
                    <?php foreach ($skill_list as $skill): ?>
                    <div class="skill-item">
                        <div class="skill-item-header">
                            <span class="skill-name"><?= htmlspecialchars($skill['name']) ?></span>
                            <span class="skill-pct"><?= $skill['level'] ?>%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-fill" style="--w: <?= $skill['level'] ?>%"></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title-sm">Also familiar with</h2>
        <div class="tag-cloud">
            <?php
            $extras = ['Java', 'Dart', 'JavaScript', 'Python', 'Figma'];
            foreach ($extras as $e): ?>
                <span class="tag-cloud-item"><?= $e ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>