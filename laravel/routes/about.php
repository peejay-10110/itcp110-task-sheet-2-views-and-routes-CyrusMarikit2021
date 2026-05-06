<?php
require_once 'includes/data.php';
$page_title = 'About';
$page_desc  = 'Learn more about ' . SITE_NAME;
require 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="page-eyebrow">About</p>
        <h1 class="page-title">I build for the<em>identity of coding.</em></h1>
    </div>
</section>

<section class="section about-main">
    <div class="container about-grid">
        <div class="about-portrait">
            <div class="portrait-frame">
                <div class="portrait-placeholder">
                    <span>AM</span>
                </div>
                <div class="portrait-badge">
                    <span class="dot dot--green"></span> Open to work for all
                </div>
            </div>
        </div>
        <div class="about-text">
            <p class="about-lead">
                I'm a a student with a mission to be a full-stack developer that sit at the intersection of precise coding and an identity.
                and I am based in a timezone somewhere between "early bird" and "night owl" — really it depends on the deadline.
            </p>
            <p>
                For the past two years, I've been building products across fintech, media, e-commerce, and SaaS. I care deeply about the craft of software: readable code, thoughtful architecture, and interfaces that feel inevitable.
                and I have a mission to be a full-stack developer that sit at the intersection of precise coding and an
                identity that complies with international standards. 
            </p>
            <p>
                I am a student of the Technological University of the Philippines, where I am currently pursuing a degree in Computer Programming. I am expected
                to graduate and enter the workforce with a strong foundation in both theoretical knowledge and practical skills. 
            </p>
            <div class="about-actions">
                <a href="/contact" class="btn btn--primary">Work with me</a>
                <a href="/resume" class="btn btn--ghost">Download résumé here</a>
            </div>
        </div>
    </div>
</section>

<section class="section about-values">
    <div class="container">
        <h2 class="section-title-sm">What I believe in</h2>
        <div class="values-grid">
            <div class="value-card">
                <span class="value-num">01</span>
                <h3>Write the code then read</h3>
                <p>In order to master the code, I let myself to write the code on my notes before memorizing them.</p>
            </div>
            <div class="value-card">
                <span class="value-num">02</span>
                <h3>Ship early, learn fast</h3>
                <p>A working prototype in front of users beats a perfect design in a Figma file. Iteration is the strategy.</p>
            </div>
            <div class="value-card">
                <span class="value-num">03</span>
                <h3>Design is not decoration</h3>
                <p>UX is more important than aesthetics alone since some of them still have errors.</p>
            </div>
            <div class="value-card">
                <span class="value-num">04</span>
                <h3>Clean UI</h3>
                <p>Clean UI have more functionality than aesthetics that have less functionality.</p>
            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>