<?php
declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$pageTitle = $pageTitle ?? SITE_NAME;
$pageDescription = $pageDescription ?? 'Multi-service maintenance for homes and workplaces.';
$bodyClass = $bodyClass ?? '';
$canonicalPath = $canonicalPath ?? current_page();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDescription) ?>">
    <meta name="theme-color" content="#f7f4ed">
    <link rel="canonical" href="<?= e(rtrim(SITE_URL, '/') . '/' . ltrim($canonicalPath, '/')) ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($pageDescription) ?>">
    <meta property="og:image" content="<?= e(rtrim(SITE_URL, '/') . '/assets/images/hero-team.png') ?>">
    <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/site.js" defer></script>
</head>
<body class="<?= e($bodyClass) ?>">
<a class="skip-link" href="#main-content">Skip to content</a>
<div class="site-topbar">
    <div class="container topbar-inner">
        <p><?= icon('map', 'topbar-icon') ?> Serving <?= e(SERVICE_AREA) ?></p>
        <div class="topbar-links">
            <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= icon('mail', 'topbar-icon') ?> <?= e(CONTACT_EMAIL) ?></a>
            <a href="tel:<?= e(PHONE_LINK) ?>"><?= icon('phone', 'topbar-icon') ?> <?= e(PHONE_DISPLAY) ?></a>
        </div>
    </div>
</div>
<header class="site-header" data-header>
    <div class="container nav-wrap">
        <a class="brand" href="index.php" aria-label="Multi Fix Crew home">
            <span class="brand-mark" aria-hidden="true"><span>M</span><i></i></span>
            <span class="brand-copy"><strong>Multi Fix</strong><small>Crew</small></span>
        </a>
        <nav class="main-nav" id="main-navigation" aria-label="Main navigation" data-nav>
            <a class="nav-link<?= is_active('index.php') ?>" href="index.php">Home</a>
            <a class="nav-link<?= is_active(['services.php', 'service.php']) ?>" href="services.php">Services</a>
            <a class="nav-link<?= is_active('about.php') ?>" href="about.php">About</a>
            <a class="nav-link<?= is_active('process.php') ?>" href="process.php">How it works</a>
            <a class="nav-link<?= is_active(['contact.php', 'service-areas.php']) ?>" href="contact.php">Contact</a>
            <a class="button button-primary nav-cta" href="quote.php">Request a quote <?= icon('arrow', 'button-icon') ?></a>
        </nav>
        <button class="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="main-navigation" data-menu-toggle>
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
<main id="main-content">

