<?php
require_once 'includes/data.php';
$page_title = 'Home';
$page_desc  = SITE_TAGLINE;
require 'includes/header.php';
?>

<section class="hero">
    <div class="hero-inner">
        <div class="hero-label">
            <span class="dot dot--green"></span>
            <span>Available for new projects</span>
        </div>
        <h1 class="hero-title">
            <em>Crafting digital</em><br>
            experiences that<br>
            <span class="hero-title-accent">endure and having identity.</span>
        </h1>
        <p class="hero-subtitle">
            I'm <?= SITE_NAME ?> — a student with a mission to be a full-stack developer
            that sit at the intersection of precise coding and an identity.
        </p>
        <div class="hero-actions">
            <a href="/projects" class="btn btn--primary">View My Work</a>
            <a href="/contact" class="btn btn--ghost">Let's Talk</a>
        </div>
    </div>
    <div class="hero-deco" aria-hidden="true">
        <div class="hero-ring hero-ring--1"></div>
        <div class="hero-ring hero-ring--2"></div>
        <div class="hero-ring hero-ring--3"></div>
        <div class="hero-counter">
            <div class="counter-item"><span class="counter-num">8+</span><span class="counter-lbl">Years of experience</span></div>
            <div class="counter-item"><span class="counter-num">60+</span><span class="counter-lbl">Projects</span></div>
            <div class="counter-item"><span class="counter-num">3</span><span class="counter-lbl">Continents</span></div>
        </div>
    </div>
</section>

<section class="section featured-work">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">Selected Work</p>
            <h2 class="section-title">Things I've <em>built</em></h2>
            <a href="/projects" class="section-link">All projects →</a>
        </div>
        <div class="project-grid">
            <?php foreach (array_slice($projects, 0, 3, true) as $slug => $p): ?>
            <article class="project-card">
                <a href="/projects/<?= $slug ?>" class="project-card-inner">
                    <div class="project-card-img" data-project="<?= $p['image'] ?>">
                        <span class="project-card-cat"><?= htmlspecialchars($p['category']) ?></span>
                    </div>
                    <div class="project-card-body">
                        <div class="project-card-meta">
                            <span><?= implode(' · ', $p['tech']) ?></span>
                            <span><?= $p['year'] ?></span>
                        </div>
                        <h3 class="project-card-title"><?= htmlspecialchars($p['title']) ?></h3>
                        <p class="project-card-desc"><?= htmlspecialchars($p['description']) ?></p>
                        <span class="project-card-arrow">View case study →</span>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section marquee-section" aria-hidden="true">
    <div class="marquee-track">
        <div class="marquee-content">
            <?php
            $items = ['React', 'PHP', 'TypeScript', 'Go', 'PostgreSQL', 'Vue', 'Kubernetes', 'Redis', 'Laravel', 'GraphQL', 'AWS', 'Python'];
            foreach (array_merge($items, $items) as $i): ?>
                <span class="marquee-item"><?= $i ?></span><span class="marquee-sep">✦</span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section writing-preview">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">Writing</p>
            <h2 class="section-title">Thoughts on <em>craft</em></h2>
            <a href="/blog" class="section-link">All posts →</a>
        </div>
        <div class="blog-list-preview">
            <?php foreach (array_slice($blog_posts, 0, 3, true) as $slug => $post): ?>
            <a href="/blog/<?= $slug ?>" class="blog-row">
                <span class="blog-row-cat"><?= htmlspecialchars($post['category']) ?></span>
                <span class="blog-row-title"><?= htmlspecialchars($post['title']) ?></span>
                <span class="blog-row-meta"><?= $post['read'] ?> · <?= $post['date'] ?></span>
                <span class="blog-row-arrow">→</span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section cta-section">
    <div class="container">
        <div class="cta-card">
            <p class="cta-eyebrow">Open to opportunities for all</p>
            <h2 class="cta-title">Have your project in mind?</h2>
            <p class="cta-text">I'm selectively available for freelance projects and full-time roles.<br>Let's talk about what you're building.</p>
            <a href="/contact" class="btn btn--primary btn--lg">Get In Touch</a>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>