<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$slug = preg_replace('/[^a-z0-9-]/', '', (string) ($_GET['slug'] ?? ''));
$service = service_by_slug($slug);

if (!$service) {
    http_response_code(404);
    $pageTitle = 'Service Not Found | Multi Fix Crew';
    $pageDescription = 'The requested service could not be found.';
    require __DIR__ . '/includes/header.php';
    ?>
    <section class="empty-state section-pad"><div class="container"><span class="service-icon"><?= icon('tools') ?></span><h1>That service page isn’t here.</h1><p>Explore the full list and choose the service that best fits your job.</p><a class="button button-primary" href="services.php">View all services <?= icon('arrow', 'button-icon') ?></a></div></section>
    <?php
    require __DIR__ . '/includes/footer.php';
    exit;
}

$pageTitle = $service['name'] . ' | Multi Fix Crew';
$pageDescription = $service['short'];
$canonicalPath = 'service.php?slug=' . $slug;
require __DIR__ . '/includes/header.php';
$serviceKeys = array_keys($services);
$position = array_search($slug, $serviceKeys, true);
$nextSlug = $serviceKeys[($position + 1) % count($serviceKeys)];
$nextService = $services[$nextSlug];
?>
<section class="service-detail-hero">
    <div class="container detail-hero-grid">
        <div class="detail-copy reveal">
            <a class="back-link" href="services.php">&larr; All services</a>
            <span class="detail-icon"><?= icon($service['icon']) ?></span>
            <p class="card-eyebrow"><?= e($service['eyebrow']) ?></p>
            <h1><?= e($service['name']) ?></h1>
            <p><?= e($service['intro']) ?></p>
            <div class="hero-actions"><a class="button button-primary button-large" href="quote.php?service=<?= e($slug) ?>">Request this service <?= icon('arrow', 'button-icon') ?></a><a class="text-link" href="tel:<?= e(PHONE_LINK) ?>"><?= icon('phone', 'link-icon') ?> Call <?= e(PHONE_DISPLAY) ?></a></div>
        </div>
        <div class="detail-panel reveal">
            <span class="detail-number"><?= e($service['number']) ?></span>
            <p>Common requests</p>
            <ul><?php foreach ($service['features'] as $feature): ?><li><?= icon('check') ?><span><?= e($feature) ?></span></li><?php endforeach; ?></ul>
            <small>Have a different <?= e(strtolower($service['name'])) ?> job? Describe it in your request and we’ll confirm whether we can help.</small>
        </div>
    </div>
</section>

<section class="service-expect section-pad">
    <div class="container expect-grid">
        <div class="reveal"><span class="eyebrow"><i></i> What to expect</span><h2>A straightforward process, shaped around your job.</h2></div>
        <div class="expect-steps">
            <article class="reveal"><span>01</span><div><h3>Show us the issue</h3><p>Share a clear description, your location and any useful access or timing details.</p></div></article>
            <article class="reveal"><span>02</span><div><h3>Agree the next step</h3><p>We review the scope and clarify the visit, materials or information needed.</p></div></article>
            <article class="reveal"><span>03</span><div><h3>Complete and review</h3><p>We carry out the agreed work and walk through the result with you.</p></div></article>
        </div>
    </div>
</section>

<section class="next-service">
    <div class="container next-service-inner reveal">
        <span class="directory-icon"><?= icon($nextService['icon']) ?></span>
        <div><small>Also available</small><h2><?= e($nextService['name']) ?></h2><p><?= e($nextService['short']) ?></p></div>
        <a class="button button-outline" href="service.php?slug=<?= e($nextSlug) ?>">Explore next service <?= icon('arrow', 'button-icon') ?></a>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>

