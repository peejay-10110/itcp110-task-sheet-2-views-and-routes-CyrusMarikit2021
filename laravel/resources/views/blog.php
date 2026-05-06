<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Writing by Cyrus Cuaresma on Functionality and Identity</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Fira+Code:wght@300;400&family=IBM+Plex+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">

<section class="page-hero">
    <div class="container">
        <p class="page-eyebrow">Writing</p>
        <h1 class="page-title">Notes on <em>functionality and identity.</em></h1>
        <p class="page-subtitle">Occasional long-form thoughts on functionality and identity.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="blog-grid">
            @foreach ($blog_posts as $slug => $post)
            <article class="blog-card">
                <a href="/blog/{{ $slug }}" class="blog-card-inner">
                    <div class="blog-card-top">
                        <span class="blog-card-cat">{{ $post['category'] }}</span>
                        <span class="blog-card-read">{{ $post['read'] }}</span>
                    </div>
                    <h2 class="blog-card-title">{{ $post['title'] }}</h2>
                    <p class="blog-card-excerpt">{{ $post['excerpt'] }}</p>
                    <div class="blog-card-footer">
                        <span class="blog-card-date">{{ $post['date'] }}</span>
                        <span class="blog-card-arrow">Read →</span>
                    </div>
                </a>
            </article>
            @endforeach
        </div>
    </div>
</section>

<footer class="site-footer">
  <div class="footer-bottom">
    <p class="footer-copy">© 2026 Cyrus Cuaresma. Built with PHP, obsession, and a bowl of adobong manok.</p>
  </div>
</footer>
</body>
</html>