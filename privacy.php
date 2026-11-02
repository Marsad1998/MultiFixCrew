<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$pageTitle = 'Privacy Policy | Multi Fix Crew';
$pageDescription = 'How Multi Fix Crew handles information submitted through this website.';
require __DIR__ . '/includes/header.php';
?>
<section class="legal-page section-pad">
    <div class="container legal-layout">
        <aside><span class="eyebrow"><i></i> Legal</span><h1>Privacy policy</h1><p>Last updated: <?= date('F Y') ?></p></aside>
        <article class="legal-content">
            <h2>Information we collect</h2><p>When you submit a quote request or contact form, we may collect your name, phone number, email address, location, requested service and the information you include in your message.</p>
            <h2>How we use it</h2><p>We use this information to understand your request, respond to you, prepare or discuss services, arrange work and maintain necessary business records.</p>
            <h2>How information is shared</h2><p>We do not sell personal information. Information may be shared with service providers or team members where reasonably needed to respond to your request, operate the website or deliver the agreed service.</p>
            <h2>Website forms, WhatsApp and cookies</h2><p>When JavaScript is available, our contact and quote forms prepare a WhatsApp message containing the details you entered. The information is not sent until you review the message and tap Send in WhatsApp. WhatsApp then processes that message under its own privacy terms. If JavaScript is unavailable, the website may submit the form to us by email instead. The website also uses a short-lived session cookie to protect forms against misuse, and the hosting provider may process basic technical logs such as IP address, browser type and access time for security and operation.</p>
            <h2>Data retention</h2><p>We keep enquiry information only for as long as reasonably needed for communication, service delivery, record keeping and applicable legal obligations.</p>
            <h2>Your choices</h2><p>You may ask to access, correct or delete personal information we hold, subject to any information we must retain for legal or operational reasons.</p>
            <h2>Contact</h2><p>For privacy questions, email <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a>.</p>
        </article>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>

