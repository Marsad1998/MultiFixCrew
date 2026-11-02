<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$pageTitle = 'About Us | Multi Fix Crew';
$pageDescription = 'Meet the idea behind Multi Fix Crew: simpler, more considerate maintenance for homes and workplaces.';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero about-hero">
    <div class="container page-hero-grid">
        <div class="reveal"><span class="eyebrow"><i></i> About Multi Fix Crew</span><h1>We believe maintenance should feel more human.</h1></div>
        <div class="page-hero-side reveal"><p>Your space matters. So do your time, your questions and the way the work is handled from first contact to final check.</p><a class="text-link" href="process.php">See how we work <?= icon('arrow', 'link-icon') ?></a></div>
    </div>
</section>

<section class="about-story section-pad">
    <div class="container story-grid">
        <div class="story-image reveal"><img src="assets/images/hero-team.png" alt="The Multi Fix Crew maintenance team" width="1918" height="839" loading="lazy"><span>One point of contact.<br>Many ways to help.</span></div>
        <div class="story-copy reveal"><span class="eyebrow"><i></i> Why we exist</span><h2>One team for the jobs that keep your space working well.</h2><p>Property maintenance often means finding, briefing and coordinating several different people. Multi Fix Crew is built around a simpler idea: bring the everyday services people need into one organised experience.</p><p>Our role is to understand what needs attention, communicate the plan in plain language and handle the work with respect for the people and property around us.</p></div>
    </div>
</section>

<section class="values-section section-pad">
    <div class="container">
        <div class="section-heading reveal"><div><span class="eyebrow"><i></i> The standard we work toward</span><h2>Small details shape the whole experience.</h2></div></div>
        <div class="values-grid">
            <article class="value-card reveal"><span><?= icon('chat') ?></span><p>01</p><h3>Clarity</h3><p>Clear questions, clear scope and clear next steps.</p></article>
            <article class="value-card reveal"><span><?= icon('shield') ?></span><p>02</p><h3>Care</h3><p>Thoughtful work with respect for your property and routine.</p></article>
            <article class="value-card reveal"><span><?= icon('tools') ?></span><p>03</p><h3>Craft</h3><p>Attention to preparation, practical execution and finish.</p></article>
            <article class="value-card reveal"><span><?= icon('smile') ?></span><p>04</p><h3>Ownership</h3><p>One crew that stays accountable through the handover.</p></article>
        </div>
    </div>
</section>

<section class="brand-manifesto section-pad-sm">
    <div class="container manifesto-inner reveal"><p>We’re here to turn a scattered maintenance list into one clear plan — and help make your home or workplace feel looked after again.</p><a class="button button-light" href="quote.php">Start a request <?= icon('arrow', 'button-icon') ?></a></div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>

