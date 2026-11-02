<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$pageTitle = 'Service Areas | Multi Fix Crew';
$pageDescription = 'Check whether Multi Fix Crew can help at your home, apartment, office or commercial space.';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container page-hero-grid">
        <div class="reveal"><span class="eyebrow"><i></i> Service areas</span><h1>Local support for the spaces around you.</h1></div>
        <div class="page-hero-side reveal"><p>We currently serve <?= e(SERVICE_AREA) ?>. Availability can vary by job, so send your location and service details for confirmation.</p><a class="button button-primary" href="quote.php">Check my address <?= icon('arrow', 'button-icon') ?></a></div>
    </div>
</section>

<section class="location-section section-pad">
    <div class="container location-grid">
        <div class="location-visual reveal"><span class="map-ring ring-one"></span><span class="map-ring ring-two"></span><span class="map-ring ring-three"></span><span class="map-pin"><?= icon('map') ?></span><div><small>Primary coverage</small><strong><?= e(SERVICE_AREA) ?></strong></div></div>
        <div class="location-copy reveal"><span class="eyebrow"><i></i> Where we work</span><h2>Tell us where the job is.</h2><p>Include your community, building or neighbourhood in the quote form. We’ll use it to check travel, access and scheduling before confirming the service.</p><div class="property-types"><div><?= icon('home') ?><span><strong>Homes & apartments</strong><small>Repairs, finishing and routine maintenance.</small></span></div><div><?= icon('layers') ?><span><strong>Offices & workplaces</strong><small>Practical work planned around your space.</small></span></div><div><?= icon('tools') ?><span><strong>Small commercial spaces</strong><small>Ask us about the job and access requirements.</small></span></div></div></div>
    </div>
</section>

<section class="area-help section-pad-sm"><div class="container callout-inner reveal"><span class="callout-icon"><?= icon('map') ?></span><div><h2>Outside the listed area?</h2><p>Send us the location anyway. We’ll let you know whether the job can be accommodated.</p></div><a class="button button-accent" href="contact.php">Ask about my area <?= icon('arrow', 'button-icon') ?></a></div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>

