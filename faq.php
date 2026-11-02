<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$pageTitle = 'Frequently Asked Questions | Multi Fix Crew';
$pageDescription = 'Answers about Multi Fix Crew services, quotes, booking, materials and preparing for a visit.';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero faq-hero">
    <div class="container page-hero-grid">
        <div class="reveal"><span class="eyebrow"><i></i> Frequently asked questions</span><h1>A few helpful answers before we begin.</h1></div>
        <div class="page-hero-side reveal"><p>Can’t find what you need? Send your question and we’ll point you in the right direction.</p><a class="text-link" href="contact.php">Ask us directly <?= icon('arrow', 'link-icon') ?></a></div>
    </div>
</section>
<section class="faq-page section-pad">
    <div class="container faq-page-grid">
        <aside class="faq-aside reveal"><span class="service-icon"><?= icon('chat') ?></span><h2>Still deciding where to start?</h2><p>You don’t need to know the technical name of the problem. Describe what you see and we’ll help identify the right service.</p><a class="button button-primary" href="quote.php">Describe my job <?= icon('arrow', 'button-icon') ?></a></aside>
        <div class="accordion accordion-large" data-accordion>
            <?php foreach ($faqs as $index => $faq): ?>
                <article class="accordion-item reveal<?= $index === 0 ? ' is-open' : '' ?>">
                    <button type="button" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"><span><small><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></small><?= e($faq['question']) ?></span><i></i></button>
                    <div class="accordion-panel"><p><?= e($faq['answer']) ?></p></div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>

