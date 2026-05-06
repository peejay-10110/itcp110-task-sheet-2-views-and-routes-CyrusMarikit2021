<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Home — Cyrus Cuaresma</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Fira+Code:wght@300;400&family=IBM+Plex+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --bg:#080b0f;--bg-2:#0e1318;--bg-3:#141b23;--surface:#1a2230;
  --border:rgba(255,255,255,0.07);--border-2:rgba(255,255,255,0.12);
  --text:#e8e2d6;--text-muted:#7a8394;--text-dim:#4a5568;
  --gold:#c9a84c;--gold-light:#e6c97a;--gold-dim:rgba(201,168,76,0.15);
  --green:#4caf82;
  --ff-display:'Libre Baskerville',Georgia,serif;
  --ff-body:'IBM Plex Sans',sans-serif;
  --ff-mono:'Fira Code',monospace;
  --ease-out:cubic-bezier(0.22,1,0.36,1);
}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--text);font-family:var(--ff-body);font-size:16px;line-height:1.7;-webkit-font-smoothing:antialiased;overflow-x:hidden}
a{color:inherit;text-decoration:none}
em{font-style:italic;color:var(--gold-light)}
p{color:var(--text-muted)}

/* Noise */
body::before{content:'';position:fixed;inset:0;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");pointer-events:none;z-index:9999;opacity:.4}

/* Header */
.site-header{position:sticky;top:0;z-index:100;background:rgba(8,11,15,.9);backdrop-filter:blur(16px);border-bottom:1px solid var(--border)}
.header-inner{max-width:1180px;margin:0 auto;padding:0 2rem;display:flex;align-items:center;justify-content:space-between;height:64px}
.logo{display:flex;align-items:center;gap:10px}
.logo-mark{width:36px;height:36px;background:var(--gold);color:var(--bg);font-family:var(--ff-display);font-weight:600;font-size:14px;border-radius:6px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.logo-name{font-size:15px;font-weight:500;color:var(--text)}
.main-nav{display:flex;align-items:center;gap:.25rem}
.nav-link{padding:6px 12px;border-radius:4px;font-size:14px;color:var(--text-muted);transition:color .2s,background .2s}
.nav-link:hover,.nav-link.active{color:var(--text);background:rgba(255,255,255,.05)}
.nav-link.active{color:var(--gold)}
.nav-cta{margin-left:.5rem;padding:6px 16px;border:1px solid var(--border-2);border-radius:4px;font-size:14px;color:var(--text-muted)}

/* Hero */
.hero{min-height:calc(100vh - 64px);display:grid;grid-template-columns:1fr 1fr;align-items:center;max-width:1180px;margin:0 auto;padding:4rem 2rem;gap:4rem}
.hero-label{display:flex;align-items:center;gap:8px;font-family:var(--ff-mono);font-size:12px;color:var(--green);margin-bottom:1.5rem;letter-spacing:.05em}
.dot{display:inline-block;width:8px;height:8px;border-radius:50%}
.dot--green{background:var(--green);box-shadow:0 0 6px var(--green);animation:pulse 2s infinite}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:.5}}
.hero-title{font-family:var(--ff-display);font-size:clamp(3rem,5.5vw,5.2rem);font-weight:300;line-height:1.0;margin-bottom:1.5rem;animation:fadeUp .8s var(--ease-out) both;color:var(--text)}
.hero-title-accent{color:var(--gold)}
.hero-subtitle{font-size:16px;max-width:440px;margin-bottom:2.5rem;line-height:1.7;color:var(--text-muted);animation:fadeUp .8s .1s var(--ease-out) both}
.hero-actions{display:flex;gap:12px;animation:fadeUp .8s .2s var(--ease-out) both}
.btn{display:inline-flex;align-items:center;justify-content:center;padding:10px 24px;border-radius:6px;font-family:var(--ff-body);font-size:14px;font-weight:500;cursor:pointer;transition:all .2s var(--ease-out);white-space:nowrap;border:none}
.btn--primary{background:var(--gold);color:var(--bg)}
.btn--primary:hover{background:var(--gold-light);transform:translateY(-1px);box-shadow:0 8px 24px rgba(201,168,76,.25)}
.btn--ghost{border:1px solid var(--border-2)!important;color:var(--text-muted);background:transparent}

/* Hero deco */
.hero-deco{position:relative;display:flex;align-items:center;justify-content:center;height:400px}
.hero-ring{position:absolute;border-radius:50%;border:1px solid var(--border)}
.hero-ring--1{width:260px;height:260px;border-color:var(--border-2);animation:spin 30s linear infinite}
.hero-ring--2{width:360px;height:360px;animation:spin 40s linear infinite reverse;border-style:dashed}
.hero-ring--3{width:460px;height:460px;animation:spin 60s linear infinite;border-color:rgba(201,168,76,.1)}
@keyframes spin{to{transform:rotate(360deg)}}
.hero-counter{position:relative;z-index:1;display:flex;flex-direction:column;gap:2rem;padding:2.5rem;background:var(--bg-2);border:1px solid var(--border);border-radius:12px}
.counter-item{display:flex;flex-direction:column}
.counter-num{font-family:var(--ff-display);font-size:3.5rem;font-weight:300;color:var(--gold);line-height:1}
.counter-lbl{font-family:var(--ff-mono);font-size:11px;color:var(--text-dim);letter-spacing:.08em;text-transform:uppercase}

/* Sections */
.section{padding:5rem 0}
.container{max-width:1180px;margin:0 auto;padding:0 2rem}
.section-header{display:flex;align-items:baseline;gap:1.5rem;margin-bottom:3rem;flex-wrap:wrap}
.section-eyebrow{font-family:var(--ff-mono);font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--text-dim)}
.section-title{font-family:var(--ff-display);font-size:clamp(2rem,3.5vw,3rem);font-weight:300;color:var(--text)}
.section-link{font-family:var(--ff-mono);font-size:12px;color:var(--gold);margin-left:auto}

/* Project grid */
.project-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.project-card{border:1px solid var(--border);border-radius:12px;overflow:hidden;transition:border-color .3s,transform .3s var(--ease-out)}
.project-card:hover{border-color:var(--border-2);transform:translateY(-4px)}
.project-card-inner{display:block}
.project-card-img{height:180px;position:relative;display:flex;align-items:center;justify-content:center;font-family:var(--ff-display);font-size:2.5rem;color:var(--border-2)}
.project-card-img.luminary{background:linear-gradient(135deg,#1a1a2e,#16213e)}
.project-card-img.phantom{background:linear-gradient(135deg,#0d1b1e,#1a3040)}
.project-card-img.verdant{background:linear-gradient(135deg,#0f1f18,#1a3328)}
.project-card-cat{position:absolute;top:12px;left:12px;font-family:var(--ff-mono);font-size:11px;padding:4px 8px;background:rgba(0,0,0,.5);border-radius:4px;color:var(--text-muted);border:1px solid var(--border)}
.project-card-body{padding:1.25rem}
.project-card-meta{display:flex;justify-content:space-between;font-family:var(--ff-mono);font-size:11px;color:var(--text-dim);margin-bottom:.6rem}
.project-card-title{font-family:var(--ff-display);font-size:1.3rem;font-weight:300;margin-bottom:.5rem;color:var(--text)}
.project-card-desc{font-size:13px;line-height:1.6;margin-bottom:1rem;color:var(--text-muted)}
.project-card-arrow{font-family:var(--ff-mono);font-size:12px;color:var(--gold)}

/* Marquee */
.marquee-section{padding:2rem 0;border-top:1px solid var(--border);border-bottom:1px solid var(--border);overflow:hidden}
.marquee-track{overflow:hidden}
.marquee-content{display:flex;align-items:center;width:max-content;animation:marquee 25s linear infinite}
.marquee-item{font-family:var(--ff-mono);font-size:12px;color:var(--text-dim);letter-spacing:.06em;padding:0 1rem;white-space:nowrap}
.marquee-sep{color:var(--gold);font-size:10px;padding:0 .5rem}
@keyframes marquee{from{transform:translateX(0)}to{transform:translateX(-50%)}}

/* Blog rows */
.blog-list-preview{display:flex;flex-direction:column}
.blog-row{display:grid;grid-template-columns:100px 1fr auto 30px;align-items:center;gap:1.5rem;padding:1.2rem 0;border-bottom:1px solid var(--border);transition:background .2s,padding-left .2s}
.blog-row:hover{background:rgba(255,255,255,.02);padding-left:1rem}
.blog-row-cat{font-family:var(--ff-mono);font-size:11px;color:var(--gold)}
.blog-row-title{font-size:15px;color:var(--text)}
.blog-row-meta{font-family:var(--ff-mono);font-size:11px;color:var(--text-dim);white-space:nowrap}
.blog-row-arrow{color:var(--text-dim)}

/* CTA */
.cta-card{text-align:center;padding:5rem 3rem;border:1px solid var(--border);border-radius:1.5rem;background:radial-gradient(ellipse at 50% 0%,rgba(201,168,76,.06),transparent 60%)}
.cta-eyebrow{font-family:var(--ff-mono);font-size:12px;color:var(--gold);text-transform:uppercase;letter-spacing:.1em;margin-bottom:1rem}
.cta-title{font-family:var(--ff-display);font-size:clamp(2rem,4vw,3.2rem);font-weight:300;margin-bottom:1rem;color:var(--text)}
.cta-text{max-width:460px;margin:0 auto 2.5rem;font-size:16px;color:var(--text-muted)}

/* Footer */
.site-footer{border-top:1px solid var(--border);padding:4rem 0 2rem}
.footer-inner{max-width:1180px;margin:0 auto;padding:0 2rem}
.footer-top{display:flex;justify-content:space-between;gap:3rem;margin-bottom:3rem}
.footer-brand .logo-mark{width:40px;height:40px;font-size:15px;margin-bottom:1.25rem}
.footer-tagline{font-size:14px;color:var(--text-dim);line-height:1.7;margin-top:.5rem}
.footer-nav{display:flex;gap:4rem}
.footer-nav-col{display:flex;flex-direction:column;gap:.75rem}
.footer-nav-label{font-family:var(--ff-mono);font-size:11px;text-transform:uppercase;letter-spacing:.1em;color:var(--text-dim)}
.footer-nav-col a{font-size:14px;color:var(--text-muted)}
.footer-bottom{display:flex;justify-content:space-between;align-items:center;padding-top:2rem;border-top:1px solid var(--border)}
.footer-copy{font-family:var(--ff-mono);font-size:12px;color:var(--text-dim)}
.footer-socials{display:flex;gap:1rem}
.footer-socials a{color:var(--text-dim)}

@keyframes fadeUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
</style>
</head>
<body>

<header class="site-header">
  <div class="header-inner">
    <a href="/" class="logo">
      <span class="logo-mark">CC</span>
      <span class="logo-name">Cyrus Cuaresma</span>
    </a>
    <nav class="main-nav">
      <a href="/about" class="nav-link">About</a>
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
  <section class="hero">
    <div class="hero-inner">
      <div class="hero-label"><span class="dot dot--green"></span> Available for new projects</div>
      <h1 class="hero-title">
        <em>Crafting digital</em><br>
        experiences that<br>
        <span class="hero-title-accent">endure.</span>
      </h1>
      <p class="hero-subtitle">I'm Cyrus Cuaresma — a student with a mission to be a full-stack developer that sit at the intersection of precise coding and an identity.</p>
      <div class="hero-actions">
        <a href="/projects" class="btn btn--primary">View My Work</a>
        <a href="/contact" class="btn btn--ghost">Let's Talk</a>
      </div>
    </div>
    <div class="hero-deco">
      <div class="hero-ring hero-ring--1"></div>
      <div class="hero-ring hero-ring--2"></div>
      <div class="hero-ring hero-ring--3"></div>
      <div class="hero-counter">
        <div class="counter-item"><span class="counter-num">2</span><span class="counter-lbl">Years of experience</span></div>
        <div class="counter-item"><span class="counter-num">5</span><span class="counter-lbl">Projects</span></div>
        <div class="counter-item"><span class="counter-num">1</span><span class="counter-lbl">Continent</span></div>
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
        <article class="project-card">
          <a href="/projects/sungka-ui" class="project-card-inner">
            <div class="project-card-img sungka"><span class="project-card-cat">Design System</span></div>
            <div class="project-card-body">
              <div class="project-card-meta"><span>JavaScript · Laravel · MySQL</span><span>2026</span></div>
              <h3 class="project-card-title">Sungka UI</h3>
              <p class="project-card-desc">A comprehensive design system built for multiple-scale applications. Features 70+ components, dark/light theming, and a compliance for full accessibility.</p>
              <span class="project-card-arrow">View case study →</span>
            </div>
          </a>
        </article>
        <article class="project-card">
          <a href="/projects/paniqui-api" class="project-card-inner">
            <div class="project-card-img paniqui"><span class="project-card-cat">Backend / DevOps</span></div>
            <div class="project-card-body">
              <div class="project-card-meta"><span>Java · PHP · MySQL</span><span>2026</span></div>
              <h3 class="project-card-title">Paniqui API</h3>
              <p class="project-card-desc">High-throughput REST & GraphQL API gateway that handles 1.5M+ requests/day with sub-25ms p99 latency.</p>
              <span class="project-card-arrow">View case study →</span>
            </div>
          </a>
        </article>
      </div>
    </div>
  </section>

  <section class="marquee-section">
    <div class="marquee-track">
      <div class="marquee-content">
        ['Java', 'PHP', 'Python', 'Dart', 'MySQL', 'Laravel', 'Python'];
        <span class="marquee-item">Java</span><span class="marquee-sep">✦</span>
        <span class="marquee-item">PHP</span><span class="marquee-sep">✦</span>
        <span class="marquee-item">Python</span><span class="marquee-sep">✦</span>
        <span class="marquee-item">Dart</span><span class="marquee-sep">✦</span>
        <span class="marquee-item">MySQL</span><span class="marquee-sep">✦</span>
        <span class="marquee-item">Laravel</span><span class="marquee-sep">✦</span>
        <span class="marquee-item">Python</span><span class="marquee-sep">✦</span>
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
        <a href="/blog/the-art-of-api-design" class="blog-row">
          <span class="blog-row-cat">Backend</span>
          <span class="blog-row-title">Filipino APIs: A Road for National Identity in IT</span>
          <span class="blog-row-meta">8 min read · May 5, 2026</span>
          <span class="blog-row-arrow">→</span>
        </a>
        <a href="/blog/css-architecture-at-scale" class="blog-row">
          <span class="blog-row-cat">Frontend</span>
          <span class="blog-row-title">Filipino-named CSS Architecture: Managing Styles at Scale</span>
          <span class="blog-row-meta">7 mins read · May 6, 2026</span>
          <span class="blog-row-arrow">→</span>
        </a>
        <a href="/blog/postgres-performance-deep-dive" class="blog-row">
          <span class="blog-row-cat">Database</span>
          <span class="blog-row-title">MySQL Query Optimization: Reading the Query Planner\'s Mind</span>
          <span class="blog-row-meta">9 min read · April 30, 2026</span>
          <span class="blog-row-arrow">→</span>
        </a>
      </div>
    </div>
  </section>

  <section class="section cta-section">
    <div class="container">
      <div class="cta-card">
        <p class="cta-eyebrow">Open to opportunities</p>
        <h2 class="cta-title">Have a project in mind?</h2>
        <p class="cta-text">I'm selectively available for freelance projects and full-time roles. Let's talk about what you're building.</p>
        <a href="/contact" class="btn btn--primary" style="padding:13px 32px;font-size:15px">Get In Touch</a>
      </div>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-brand">
        <div class="logo-mark">CC</div>
        <p class="footer-tagline">Building things that matter,<br>one commit at a time.</p>
      </div>
      <nav class="footer-nav">
        <div class="footer-nav-col">
          <span class="footer-nav-label">Pages</span>
          <a href="/about">About</a><a href="/projects">Work</a><a href="/skills">Skills</a><a href="/experience">Experience</a>
        </div>
        <div class="footer-nav-col">
          <span class="footer-nav-label">More</span>
          <a href="/blog">Writing</a><a href="/uses">Uses</a><a href="/resume">Résumé</a><a href="/contact">Contact</a>
        </div>
      </nav>
    </div>
    <div class="footer-bottom">
      <p class="footer-copy">© 2026 Cyrus Cuaresma. Built with PHP, obsession, and a bowl of adobong manok.</p>
      <div class="footer-socials">
        <a href="#">GH</a><a href="#">LI</a><a href="#">✉</a>
      </div>
    </div>
  </div>
</footer>
</body>
</html>