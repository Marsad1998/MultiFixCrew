<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$pageTitle = 'Website Terms | Multi Fix Crew';
$pageDescription = 'Terms for using the Multi Fix Crew website and submitting service enquiries.';
require __DIR__ . '/includes/header.php';
?>
<section class="legal-page section-pad">
    <div class="container legal-layout">
        <aside><span class="eyebrow"><i></i> Legal</span><h1>Website terms</h1><p>Last updated: <?= date('F Y') ?></p></aside>
        <article class="legal-content">
            <h2>Using this website</h2><p>This website provides general information about Multi Fix Crew and a way to submit service enquiries. You agree to use it lawfully and provide accurate information in any form you send.</p>
            <h2>Enquiries and quotations</h2><p>Submitting a form does not create a service agreement. Availability, scope, timing, pricing, materials and any service-specific terms must be confirmed separately before work begins.</p>
            <h2>Website information</h2><p>We aim to keep service information useful and current, but website content is general and may not cover every property, fault or project. We may update or remove content without notice.</p>
            <h2>Third-party services</h2><p>Links such as WhatsApp or email may open third-party services. Their own terms and privacy practices apply when you use them.</p>
            <h2>Liability</h2><p>To the extent permitted by applicable law, Multi Fix Crew is not responsible for loss arising solely from reliance on general website content or temporary website unavailability.</p>
            <h2>Contact</h2><p>Questions about these terms can be sent to <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a>.</p>
        </article>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>

