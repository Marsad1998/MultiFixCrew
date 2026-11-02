<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$pageTitle = 'Multi Fix Crew | Complete Home & Property Maintenance';
$pageDescription = 'One trusted crew for AC, plumbing, carpentry, electrical, painting, cleaning, moving and gypsum works.';
$bodyClass = 'home-page';
require __DIR__ . '/includes/header.php';
?>
<section class="hero section-pad">
    <div class="container hero-grid">
        <div class="hero-copy reveal">
            <span class="eyebrow"><i></i> Whole-space maintenance, simplified</span>
            <h1>The calm way to get your <em>space fixed.</em></h1>
            <p class="hero-lead">From the urgent repair to the finishing touch, Multi Fix Crew brings your essential maintenance services together under one dependable roof.</p>
            <div class="hero-actions">
                <a class="button button-primary button-large" href="quote.php">Request a free quote <?= icon('arrow', 'button-icon') ?></a>
                <a class="text-link" href="services.php">Explore all services <?= icon('chevron', 'link-icon') ?></a>
            </div>
            <div class="hero-assurances" aria-label="Our service approach">
                <span><?= icon('check') ?> Clear communication</span>
                <span><?= icon('check') ?> Careful workmanship</span>
                <span><?= icon('check') ?> Tidy handover</span>
            </div>
        </div>
        <div class="hero-visual reveal reveal-delay">
            <div class="hero-image-wrap">
                <img src="assets/images/hero-team.png" alt="A friendly two-person maintenance crew in a bright modern home" width="1918" height="839" fetchpriority="high">
                <span class="hero-shape hero-shape-one"></span>
                <span class="hero-shape hero-shape-two"></span>
            </div>
            <div class="hero-note">
                <span class="note-icon"><?= icon('home') ?></span>
                <p><small>Your to-do list, handled</small><strong>One crew. Eight services.</strong></p>
            </div>
        </div>
    </div>
</section>

<section class="service-ribbon" aria-label="Available services">
    <div class="container ribbon-track">
        <?php foreach ($services as $slug => $service): ?>
            <a href="service.php?slug=<?= e($slug) ?>"><span><?= e($service['number']) ?></span><?= e($service['name']) ?></a>
        <?php endforeach; ?>
    </div>
</section>

<section class="intro section-pad">
    <div class="container intro-grid">
        <div class="section-label reveal"><span>Built for real life</span></div>
        <div class="intro-copy reveal">
            <h2>A home has many moving parts. Caring for it shouldn’t feel complicated.</h2>
            <p>Instead of managing a different contact for every task, tell us what needs attention. We’ll help organise the work, keep the conversation clear and leave your space ready to enjoy.</p>
        </div>
    </div>
</section>

<section class="services-section section-pad" id="services">
    <div class="container">
        <div class="section-heading reveal">
            <div><span class="eyebrow"><i></i> What we take care of</span><h2>One capable crew.<br>Everyday jobs, beautifully handled.</h2></div>
            <a class="text-link desktop-link" href="services.php">View every service <?= icon('arrow', 'link-icon') ?></a>
        </div>
        <div class="services-grid">
            <?php foreach ($services as $slug => $service): ?>
                <article class="service-card reveal">
                    <div class="service-card-top"><span class="service-icon"><?= icon($service['icon']) ?></span><span class="service-number"><?= e($service['number']) ?></span></div>
                    <p class="card-eyebrow"><?= e($service['eyebrow']) ?></p>
                    <h3><a href="service.php?slug=<?= e($slug) ?>"><?= e($service['name']) ?></a></h3>
                    <p><?= e($service['short']) ?></p>
                    <a class="card-link" href="service.php?slug=<?= e($slug) ?>" aria-label="Learn about <?= e($service['name']) ?>">Explore service <?= icon('arrow', 'link-icon') ?></a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="why-section section-pad">
    <div class="container why-grid">
        <div class="why-art reveal">
            <div class="art-panel art-main">
                <span class="art-kicker">The Multi Fix standard</span>
                <p>“Treat the space with care. Explain the work clearly. Finish the details.”</p>
                <span class="art-signoff">Our approach to every visit</span>
            </div>
            <div class="art-panel art-small">
                <span><?= icon('shield') ?></span>
                <strong>Respect built into the process.</strong>
            </div>
        </div>
        <div class="why-copy reveal">
            <span class="eyebrow"><i></i> Why Multi Fix Crew</span>
            <h2>Professional help without the usual runaround.</h2>
            <p>Good maintenance is about more than the repair itself. It is also about how the job is planned, how your space is treated and how well you understand what happens next.</p>
            <div class="feature-list">
                <div><span><?= icon('chat') ?></span><p><strong>One clear conversation</strong><small>Tell us the whole list. We’ll help organise the right service.</small></p></div>
                <div><span><?= icon('calendar') ?></span><p><strong>Planned around your space</strong><small>We consider access, timing and the practical details before work starts.</small></p></div>
                <div><span><?= icon('sparkles') ?></span><p><strong>Attention through handover</strong><small>Details, protection and a tidy finish are part of the job.</small></p></div>
            </div>
        </div>
    </div>
</section>

<section class="process-section section-pad">
    <div class="container">
        <div class="section-heading centered reveal">
            <span class="eyebrow"><i></i> Simple from the start</span>
            <h2>From “something’s wrong” to sorted.</h2>
            <p>You don’t need to diagnose the issue before getting in touch. Just show us what you see.</p>
        </div>
        <div class="process-grid">
            <article class="process-card reveal"><span class="process-number">01</span><div class="process-icon"><?= icon('clipboard') ?></div><h3>Share the job</h3><p>Send the service, location and a short description of what needs attention.</p></article>
            <article class="process-card reveal"><span class="process-number">02</span><div class="process-icon"><?= icon('chat') ?></div><h3>Confirm the plan</h3><p>We clarify the details, discuss timing and outline the next step.</p></article>
            <article class="process-card reveal"><span class="process-number">03</span><div class="process-icon"><?= icon('tools') ?></div><h3>We get to work</h3><p>The crew arrives prepared, protects the work area and handles the agreed scope.</p></article>
            <article class="process-card reveal"><span class="process-number">04</span><div class="process-icon"><?= icon('smile') ?></div><h3>Enjoy the result</h3><p>We review the completed work with you and leave the space tidy.</p></article>
        </div>
        <div class="center-action reveal"><a class="button button-outline" href="process.php">See how it works <?= icon('arrow', 'button-icon') ?></a></div>
    </div>
</section>

<section class="area-section">
    <div class="container area-grid">
        <div class="area-map reveal" aria-hidden="true">
            <span class="map-ring ring-one"></span><span class="map-ring ring-two"></span><span class="map-ring ring-three"></span>
            <span class="map-pin"><?= icon('map') ?></span>
            <span class="map-dot dot-one"></span><span class="map-dot dot-two"></span><span class="map-dot dot-three"></span>
        </div>
        <div class="area-copy reveal">
            <span class="eyebrow eyebrow-light"><i></i> Local help, when you need it</span>
            <h2>Is your property in our service area?</h2>
            <p>We serve <?= e(SERVICE_AREA) ?>. Send your location and job details, and we’ll confirm availability for your address.</p>
            <a class="button button-light" href="service-areas.php">Check your area <?= icon('arrow', 'button-icon') ?></a>
        </div>
    </div>
</section>

<section class="faq-section section-pad">
    <div class="container faq-layout">
        <div class="faq-intro reveal">
            <span class="eyebrow"><i></i> Good to know</span>
            <h2>Questions before we get started?</h2>
            <p>Here are the things people usually want to know before requesting maintenance.</p>
            <a class="text-link" href="faq.php">View all FAQs <?= icon('arrow', 'link-icon') ?></a>
        </div>
        <div class="accordion" data-accordion>
            <?php foreach (array_slice($faqs, 0, 4) as $index => $faq): ?>
                <article class="accordion-item reveal<?= $index === 0 ? ' is-open' : '' ?>">
                    <button type="button" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"><span><?= e($faq['question']) ?></span><i></i></button>
                    <div class="accordion-panel"><p><?= e($faq['answer']) ?></p></div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="closing-cta">
    <div class="container closing-inner reveal">
        <div><span class="eyebrow eyebrow-light"><i></i> Let’s make the list shorter</span><h2>What can we take care of for you?</h2></div>
        <div class="closing-actions"><a class="button button-accent button-large" href="quote.php">Tell us about the job <?= icon('arrow', 'button-icon') ?></a><a class="cta-phone" href="tel:<?= e(PHONE_LINK) ?>"><span><?= icon('phone') ?></span><small>Prefer to call?</small><strong><?= e(PHONE_DISPLAY) ?></strong></a></div>
    </div>
</section>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'HomeAndConstructionBusiness',
    'name' => SITE_NAME,
    'url' => SITE_URL,
    'email' => CONTACT_EMAIL,
    'telephone' => PHONE_DISPLAY,
    'description' => $pageDescription,
    'areaServed' => SERVICE_AREA,
    'makesOffer' => array_map(static fn ($service) => ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $service['name']]], $services),
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
<?php require __DIR__ . '/includes/footer.php'; ?>

