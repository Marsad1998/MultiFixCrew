<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$type = ($_GET['type'] ?? '') === 'quote' ? 'quote request' : 'message';
$pageTitle = 'Thank You | Multi Fix Crew';
$pageDescription = 'Your message has been sent to Multi Fix Crew.';
require __DIR__ . '/includes/header.php';
?>
<section class="empty-state thank-you section-pad">
    <div class="container"><span class="success-mark"><?= icon('check') ?></span><p class="card-eyebrow">Message received</p><h1>Thanks — your <?= e($type) ?> is on its way.</h1><p>We’ll review the details and get back to you using the contact information you provided.</p><div class="hero-actions"><a class="button button-primary" href="index.php">Return home <?= icon('arrow', 'button-icon') ?></a><a class="text-link" href="services.php">Browse services <?= icon('chevron', 'link-icon') ?></a></div></div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>

