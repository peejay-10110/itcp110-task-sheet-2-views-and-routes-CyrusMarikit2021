<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>About — Cyrus Cuaresma</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Fira+Code:wght@300;400&family=IBM+Plex+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{--bg:#080b0f;--bg-2:#0e1318;--bg-3:#141b23;--border:rgba(255,255,255,0.08);--border-2:rgba(255,255,255,0.15);--text:#e8e2d6;--text-muted:#7a8394;--text-dim:#4a5568;--gold:#c9a84c;--gold-light:#e6c97a;--gold-dim:rgba(201,168,76,0.15);--green:#4caf82;--ff-display:'Libre Baskerville',Georgia,serif;--ff-body:'IBM Plex Sans',sans-serif;--ff-mono:'Fira Code',monospace;--ease-out:cubic-bezier(0.22,1,0.36,1)}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--text);font-family:var(--ff-body);font-size:16px;line-height:1.7;-webkit-font-smoothing:antialiased}
a{color:inherit;text-decoration:none}
em{font-style:italic;color:var(--gold-light)}
p{color:var(--text-muted)}
body::before{content:'';position:fixed;inset:0;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");pointer-events:none;z-index:9999;opacity:.4}
.site-header{position:sticky;top:0;z-index:100;background:rgba(8,11,15,.9);backdrop-filter:blur(16px);border-bottom:1px solid var(--border)}
.header-inner{max-width:1180px;margin:0 auto;padding:0 2rem;display:flex;align-items:center;justify-content:space-between;height:64px}
.logo{display:flex;align-items:center;gap:10px}
.logo-mark{width:36px;height:36px;background:var(--gold);color:var(--bg);font-family:var(--ff-display);font-weight:600;font-size:14px;border-radius:6px;display:flex;align-items:center;justify-content:center}
.logo-name{font-size:15px;font-weight:500;color:var(--text)}
.nav-link{padding:6px 12px;border-radius:4px;font-size:14px;color:var(--text-muted)}
.nav-link.active{color:var(--gold);background:rgba(255,255,255,.05)}
.nav-cta{margin-left:.5rem;padding:6px 16px;border:1px solid var(--border-2);border-radius:4px;font-size:14px;color:var(--text-muted)}
.container{max-width:1180px;margin:0 auto;padding:0 2rem}
.section{padding:5rem 0}
.page-hero{padding:5rem 0 3rem;border-bottom:1px solid var(--border)}
.page-eyebrow{font-family:var(--ff-mono);font-size:12px;letter-spacing:.1em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem}
.page-title{font-family:var(--ff-display);font-size:clamp(2.5rem,5vw,4.5rem);font-weight:300;color:var(--text);animation:fadeUp .6s var(--ease-out) both}
.about-grid{display:grid;grid-template-columns:300px 1fr;gap:4rem;align-items:start}
.portrait-frame{position:sticky;top:5rem}
.portrait-placeholder{width:100%;aspect-ratio:3/4;background:var(--bg-2);border:1px solid var(--border);border-radius:12px;display:flex;align-items:center;justify-content:center;font-family:var(--ff-display);font-size:5rem;color:var(--border-2);margin-bottom:1rem}
.portrait-badge{display:flex;align-items:center;gap:8px;font-size:13px;color:var(--text-muted);padding:10px 14px;background:var(--bg-2);border:1px solid var(--border);border-radius:100px}
.dot{display:inline-block;width:8px;height:8px;border-radius:50%}
.dot--green{background:var(--green);box-shadow:0 0 6px var(--green);animation:pulse 2s infinite}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:.5}}
.about-lead{font-family:var(--ff-display);font-size:20px;color:var(--text);line-height:1.6;margin-bottom:1.5rem;font-weight:300}
.about-text p{font-size:15px;line-height:1.8;margin-bottom:1.25rem;color:var(--text-muted)}
.about-actions{display:flex;gap:12px;margin-top:2rem}
.btn{display:inline-flex;align-items:center;padding:10px 24px;border-radius:6px;font-family:var(--ff-body);font-size:14px;font-weight:500;cursor:pointer;transition:all .2s;border:none}
.btn--primary{background:var(--gold);color:var(--bg)}
.btn--ghost{border:1px solid var(--border-2)!important;color:var(--text-muted);background:transparent}
.values-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem}
.value-card{padding:2rem;border:1px solid var(--border);border-radius:12px}
.value-num{font-family:var(--ff-mono);font-size:11px;color:var(--gold);display:block;margin-bottom:1rem}
.value-card h3{font-family:var(--ff-display);font-size:1.1rem;margin-bottom:.75rem;color:var(--text);font-weight:400}
.value-card p{font-size:13px;color:var(--text-muted)}
.section-title-sm{font-family:var(--ff-display);font-size:1.8rem;font-weight:300;margin-bottom:2rem;color:var(--text)}
.site-footer{border-top:1px solid var(--border);padding:3rem 0 2rem}
.footer-bottom{display:flex;justify-content:space-between;align-items:center;max-width:1180px;margin:0 auto;padding:0 2rem}
.footer-copy{font-family:var(--ff-mono);font-size:12px;color:var(--text-dim)}
@keyframes fadeUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
</style>
</head>
<body>
<header class="site-header">
  <div class="header-inner">
    <a href="/" class="logo"><span class="logo-mark">CC</span><span class="logo-name">Cyrus Cuaresma</span></a>
    <nav class="main-nav">
      <a href="/about" class="nav-link active">About</a>
      <a href="/projects" class="nav-link">Work</a>
      <a href="/skills" class="nav-link">Skills</a>
      <a href="/experience" class="nav-link">Experience</a>
      <a href="/blog" class="nav-link">Writing</a>
      <a href="/contact" class="nav-link">Contact</a>
      <a href="/resume" class="nav-cta">Résumé</a>
    </nav>
  </div>
</header>
<main>
  <section class="page-hero">
    <div class="container">
      <p class="page-eyebrow">About</p>
      <h1 class="page-title">I build for the <em>identity of coding.</em></h1>
    </div>
  </section>
  <section class="section">
    <div class="container about-grid">
      <div class="portrait-frame">
        <div class="portrait-placeholder">CC</div>
        <div class="portrait-badge"><span class="dot dot--green"></span> Open to work for all</div>
      </div>
      <div class="about-text">
        <p class="about-lead">I'm a full-stack developer based in a timezone somewhere between "early bird" and "night owl" — really it depends on the deadline.</p>
        <p>For the past 8 years I've been building products across fintech, media, e-commerce, and SaaS. I care deeply about the craft of software: readable code, thoughtful architecture, and interfaces that feel inevitable.</p>
        <p>My work lives at the intersection of engineering and design. I think a developer who cares about typography and a designer who can write a SQL query are both rarer and more valuable than their siloed counterparts.</p>
        <p>When I'm not in a terminal, I'm probably reading about type history, obsessing over mechanical keyboards, or attempting to convince people that SQL is actually a beautiful language.</p>
        <div class="about-actions">
          <a href="/contact" class="btn btn--primary">Work With Me</a>
          <a href="/resume" class="btn btn--ghost">Download the Résumé</a>
        </div>
      </div>
    </div>
  </section>
  <section class="section" style="border-top:1px solid var(--border)">
    <div class="container">
      <h2 class="section-title-sm">What I believe in</h2>
      <div class="values-grid">
        <div class="value-card"><span class="value-num">01</span><h3>Write the code then read</h3><p>In order to master the code, I let myself to write the code on my notes before memorizing them.</p></div>
        <div class="value-card"><span class="value-num">02</span><h3>Ship early, learn fast</h3><p>A working prototype in front of users beats a perfect design in a Figma file. Iteration is the strategy.</p></div>
        <div class="value-card"><span class="value-num">03</span><h3>Design is not decoration</h3><p>UX is more important than aesthetics alone since some of them still have errors.</p></div>
        <div class="value-card"><span class="value-num">04</span><h3>Clean UI</h3><p>Clean UI have more functionality than aesthetics that have less functionality.</p></div>
      </div>
    </div>
  </section>
</main>
<footer class="site-footer">
  <div class="footer-bottom">
    <p class="footer-copy">© 2026 Cyrus Cuaresma. Built with PHP, obsession, and a bowl of adobong manok.</p>
  </div>
</footer>
</body>
</html>