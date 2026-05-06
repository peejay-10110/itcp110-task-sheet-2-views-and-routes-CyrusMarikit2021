<?php
$current_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$current_path = rtrim($current_path, '/') ?: '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title ?? SITE_NAME) ?> — <?= SITE_NAME ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_desc ?? SITE_TAGLINE) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Mono:ital,wght@0,300;0,400;1,300&family=Cabinet+Grotesk:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<div class="noise-overlay"></div>

<header class="site-header" id="site-header">
    <div class="header-inner">
        <a href="/" class="logo" aria-label="Home">
            <span class="logo-mark">AM</span>
            <span class="logo-name"><?= SITE_NAME ?></span>
        </a>

        <nav class="main-nav" id="main-nav">
            <?php
            $nav_items = [
                '/about'      => 'About',
                '/projects'   => 'Work',
                '/skills'     => 'Skills',
                '/experience' => 'Experience',
                '/blog'       => 'Writing',
                '/contact'    => 'Contact',
            ];
            foreach ($nav_items as $path => $label):
                $active = ($current_path === $path || str_starts_with($current_path, $path . '/'));
            ?>
                <a href="<?= $path ?>" class="nav-link <?= $active ? 'active' : '' ?>">
                    <?= $label ?>
                </a>
            <?php endforeach; ?>

            <a href="/resume" class="nav-cta">Résumé</a>
        </nav>

        <button class="menu-toggle" id="menu-toggle" aria-label="Toggle menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<main class="main-content">