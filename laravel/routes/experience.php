<?php
require_once 'includes/data.php';
$page_title = 'Experience';
$page_desc  = 'My experience and career history of ' . SITE_NAME;
require 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="page-eyebrow">Experience</p>
        <h1 class="page-title">My coding <em>journey</em> so far.</h1>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <div class="timeline">
            <?php foreach ($experience as $idx => $job): ?>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-body">
                    <div class="timeline-header">
                        <div>
                            <h2 class="timeline-role"><?= htmlspecialchars($job['role']) ?></h2>
                            <div class="timeline-company">
                                <span><?= htmlspecialchars($job['company']) ?></span>
                                <span class="timeline-type"><?= htmlspecialchars($job['type']) ?></span>
                            </div>
                        </div>
                        <span class="timeline-period"><?= htmlspecialchars($job['period']) ?></span>
                    </div>
                    <ul class="timeline-points">
                        <?php foreach ($job['points'] as $point): ?>
                        <li><?= htmlspecialchars($point) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="education-section">
            <h2 class="section-title-sm">Education</h2>
            <div class="edu-card">
                <div>
                    <strong>BTVTE Major in Computer Programming</strong>
                    <p>Technological University of the Philippines</p>
                </div>
                <span class="timeline-period">2024 — present</span>
            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>