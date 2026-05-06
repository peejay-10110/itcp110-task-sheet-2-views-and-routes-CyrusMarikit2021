<?php
require_once 'includes/data.php';
$page_title = 'Résumé';
$page_desc  = 'Professional résumé of ' . SITE_NAME;
require 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="page-eyebrow">Résumé</p>
        <h1 class="page-title">At a <em>glance.</em></h1>
        <div class="hero-actions">
            <a href="#" class="btn btn--primary" download>Download PDF →</a>
            <a href="/contact" class="btn btn--ghost">Hire Me Here</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">

        <div class="resume-section">
            <h2 class="resume-section-title">Experience</h2>
            <?php foreach ($experience as $job): ?>
            <div class="resume-job">
                <div class="resume-job-header">
                    <div>
                        <strong class="resume-role"><?= htmlspecialchars($job['role']) ?></strong>
                        <span class="resume-company"><?= htmlspecialchars($job['company']) ?></span>
                    </div>
                    <span class="timeline-period"><?= htmlspecialchars($job['period']) ?></span>
                </div>
                <ul class="resume-points">
                    <?php foreach ($job['points'] as $point): ?>
                    <li><?= htmlspecialchars($point) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="resume-section">
            <h2 class="resume-section-title">Skills</h2>
            <div class="resume-skills-grid">
                <?php foreach ($skills as $category => $skill_list): ?>
                <div>
                    <strong><?= htmlspecialchars($category) ?></strong>
                    <p><?= implode(', ', array_column($skill_list, 'name')) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="resume-section">
            <h2 class="resume-section-title">Education</h2>
            <div class="resume-job">
                <div class="resume-job-header">
                    <div>
                        <strong class="resume-role">BTVTE Major in Computer Programming</strong>
                        <span class="resume-company">Technological University of the Philippines</span>
                    </div>
                    <span class="timeline-period">2024 — present</span>
                </div>
            </div>
        </div>

    </div>
</section>

<?php require 'includes/footer.php'; ?>