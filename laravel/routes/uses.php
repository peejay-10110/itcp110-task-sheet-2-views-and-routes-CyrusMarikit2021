<?php
require_once 'includes/data.php';
$page_title = 'Uses';
$page_desc  = 'Tools and gear used by ' . SITE_NAME;
require 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="page-eyebrow">Uses</p>
        <h1 class="page-title">The <em>setup.</em></h1>
        <p class="page-subtitle">It composes of hardware and software</p>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <?php foreach ($uses_list as $category => $items): ?>
        <div class="uses-category">
            <h2 class="uses-category-title"><?= htmlspecialchars($category) ?></h2>
            <div class="uses-list">
                <?php foreach ($items as $item): ?>
                <div class="uses-item">
                    <strong class="uses-name"><?= htmlspecialchars($item['item']) ?></strong>
                    <span class="uses-note"><?= htmlspecialchars($item['note']) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php require 'includes/footer.php'; ?>


