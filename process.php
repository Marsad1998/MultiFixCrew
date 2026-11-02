<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$pageTitle = 'How It Works | Multi Fix Crew';
$pageDescription = 'See how Multi Fix Crew turns your maintenance list into a clear, manageable plan.';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero process-hero">
    <div class="container page-hero-grid">
        <div class="reveal"><span class="eyebrow"><i></i> How it works</span><h1>A clear path from request to ready.</h1></div>
        <div class="page-hero-side reveal"><p>You bring the problem. We help organise the next steps, set expectations and keep the work moving.</p><a class="button button-primary" href="quote.php">Start with your job <?= icon('arrow', 'button-icon') ?></a></div>
    </div>
</section>

<section class="process-detail section-pad">
    <div class="container process-detail-list">
        <article class="process-detail-row reveal"><span class="giant-number">01</span><div class="process-detail-icon"><?= icon('clipboard') ?></div><div><p class="card-eyebrow">Tell us what you see</p><h2>Share the job</h2><p>Choose the closest service and describe what needs attention. Your area, property type, timing and a clear summary help us understand the request.</p><ul><li><?= icon('check') ?> List every task you want included</li><li><?= icon('check') ?> Mention access or timing limits</li><li><?= icon('check') ?> Explain the result you want</li></ul></div></article>
        <article class="process-detail-row reveal"><span class="giant-number">02</span><div class="process-detail-icon"><?= icon('chat') ?></div><div><p class="card-eyebrow">Remove the guesswork</p><h2>Confirm the plan</h2><p>We review the information, ask any useful follow-up questions and explain the proposed next step before work begins.</p><ul><li><?= icon('check') ?> Clarify the scope</li><li><?= icon('check') ?> Discuss materials where relevant</li><li><?= icon('check') ?> Agree the timing</li></ul></div></article>
        <article class="process-detail-row reveal"><span class="giant-number">03</span><div class="process-detail-icon"><?= icon('tools') ?></div><div><p class="card-eyebrow">Prepared and considerate</p><h2>Complete the work</h2><p>The crew arrives for the agreed service, protects the work area and keeps you informed if the situation differs from the original description.</p><ul><li><?= icon('check') ?> Respect the space</li><li><?= icon('check') ?> Follow the agreed scope</li><li><?= icon('check') ?> Communicate useful changes</li></ul></div></article>
        <article class="process-detail-row reveal"><span class="giant-number">04</span><div class="process-detail-icon"><?= icon('smile') ?></div><div><p class="card-eyebrow">The final details matter</p><h2>Review and hand over</h2><p>Once the work is complete, we check the result with you and explain any practical aftercare or next steps.</p><ul><li><?= icon('check') ?> Review the outcome</li><li><?= icon('check') ?> Clear the work area</li><li><?= icon('check') ?> Share relevant aftercare</li></ul></div></article>
    </div>
</section>

<section class="prep-section section-pad-sm">
    <div class="container prep-grid reveal"><div><span class="eyebrow"><i></i> Help us plan well</span><h2>A useful request includes:</h2></div><div class="prep-tags"><span>Your service</span><span>Your area</span><span>Property type</span><span>Preferred timing</span><span>Job description</span><span>Access details</span></div></div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>

