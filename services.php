<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$pageTitle = 'Our Services | Multi Fix Crew';
$pageDescription = 'Explore AC, plumbing, carpentry, electrical, painting and gypsum services from Multi Fix Crew.';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container page-hero-grid">
        <div class="reveal"><span class="eyebrow"><i></i> Six services. One helpful crew.</span><h1>Everything your space needs, all in one place.</h1></div>
        <div class="page-hero-side reveal"><p>Choose one service or send us the whole list. We’ll help make sense of the work and plan a practical next step.</p><a class="button button-primary" href="quote.php">Request a quote <?= icon('arrow', 'button-icon') ?></a></div>
    </div>
</section>

<section class="services-directory section-pad">
    <div class="container services-directory-grid">
        <?php foreach ($services as $slug => $service): ?>
            <article class="directory-card reveal">
                <div class="directory-card-head"><span class="directory-icon"><?= icon($service['icon']) ?></span><span><?= e($service['number']) ?></span></div>
                <div><p class="card-eyebrow"><?= e($service['eyebrow']) ?></p><h2><?= e($service['name']) ?></h2><p><?= e($service['short']) ?></p></div>
                <ul><?php foreach ($service['features'] as $feature): ?><li><?= icon('check') ?><?= e($feature) ?></li><?php endforeach; ?></ul>
                <a class="card-link" href="service.php?slug=<?= e($slug) ?>">View <?= e($service['name']) ?> <?= icon('arrow', 'link-icon') ?></a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="multi-service-callout section-pad-sm">
    <div class="container callout-inner reveal">
        <span class="callout-icon"><?= icon('layers') ?></span>
        <div><span class="eyebrow"><i></i> More than one job?</span><h2>Combine services into one clear request.</h2><p>Painting after gypsum repair? Electrical work alongside carpentry? Add each task to your quote request so we can understand the full picture.</p></div>
        <a class="button button-accent" href="quote.php">Start my request <?= icon('arrow', 'button-icon') ?></a>
    </div>
</section>

<section class="standards-section section-pad">
    <div class="container">
        <div class="section-heading reveal"><div><span class="eyebrow"><i></i> Across every service</span><h2>One consistent way of working.</h2></div></div>
        <div class="standards-grid">
            <article class="reveal"><span>01</span><h3>Understand first</h3><p>We begin with the job, the space and the result you want.</p></article>
            <article class="reveal"><span>02</span><h3>Plan the details</h3><p>Access, timing, protection and materials are discussed before work begins.</p></article>
            <article class="reveal"><span>03</span><h3>Work with care</h3><p>The agreed scope stays clear while the crew respects your property.</p></article>
            <article class="reveal"><span>04</span><h3>Finish properly</h3><p>We check the work with you and leave the area in good order.</p></article>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>

