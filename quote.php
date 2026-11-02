<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$formResult = handle_inquiry('quote');
$selectedService = preg_replace('/[^a-z0-9-]/', '', (string) ($_POST['service'] ?? $_GET['service'] ?? ''));
$pageTitle = 'Request a Quote | Multi Fix Crew';
$pageDescription = 'Tell Multi Fix Crew about your maintenance job and request a personalised quote.';
require __DIR__ . '/includes/header.php';
?>
<section class="form-page">
    <div class="container form-layout">
        <div class="form-intro reveal">
            <span class="eyebrow"><i></i> Request a quote</span>
            <h1>Tell us what needs attention.</h1>
            <p>Share the essentials below. The more useful context you include, the easier it is to plan the right next step.</p>
            <div class="form-side-list">
                <div><span>01</span><p><strong>Choose a service</strong><small>Pick the closest match for the main job.</small></p></div>
                <div><span>02</span><p><strong>Describe the work</strong><small>Add other tasks, access notes and preferred timing.</small></p></div>
                <div><span>03</span><p><strong>Review in WhatsApp</strong><small>Check the prepared message, then tap Send when it looks right.</small></p></div>
            </div>
            <div class="direct-contact"><small>Prefer a direct conversation?</small><a href="tel:<?= e(PHONE_LINK) ?>"><?= icon('phone') ?> <?= e(PHONE_DISPLAY) ?></a><a href="https://wa.me/<?= e(WHATSAPP_NUMBER) ?>" target="_blank" rel="noopener"><?= icon('chat') ?> Message on WhatsApp</a></div>
        </div>
        <div class="form-card reveal reveal-delay">
            <div class="form-card-head"><div><p class="card-eyebrow">Your request</p><h2>Let’s get the details.</h2></div><span><?= icon('clipboard') ?></span></div>
            <?php if ($formResult['errors']): ?>
                <div class="form-alert" role="alert"><strong>Please check the form:</strong><ul><?php foreach ($formResult['errors'] as $error): ?><li><?= e($error) ?></li><?php endforeach; ?></ul></div>
            <?php endif; ?>
            <form method="post" action="quote.php" class="request-form" data-whatsapp-form data-whatsapp-number="<?= e(WHATSAPP_NUMBER) ?>" data-request-type="quote">
                <input type="hidden" name="form_type" value="quote">
                <input type="hidden" name="csrf_token" value="<?= e(csrf_token()) ?>">
                <div class="honeypot" aria-hidden="true"><label>Website<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
                <div class="field-grid">
                    <label class="field"><span>Your name *</span><input type="text" name="name" value="<?= e((string) ($_POST['name'] ?? '')) ?>" required autocomplete="name" placeholder="Full name"></label>
                    <label class="field"><span>Phone number *</span><input type="tel" name="phone" value="<?= e((string) ($_POST['phone'] ?? '')) ?>" required autocomplete="tel" placeholder="Your best contact number"></label>
                </div>
                <div class="field-grid">
                    <label class="field"><span>Email address</span><input type="email" name="email" value="<?= e((string) ($_POST['email'] ?? '')) ?>" autocomplete="email" placeholder="you@example.com"></label>
                    <label class="field"><span>Area / community</span><input type="text" name="location" value="<?= e((string) ($_POST['location'] ?? '')) ?>" autocomplete="address-level2" placeholder="Where is the property?"></label>
                </div>
                <label class="field"><span>What service do you need? *</span><select name="service" required><option value="">Choose a service</option><?php foreach ($services as $slug => $service): ?><option value="<?= e($slug) ?>"<?= $selectedService === $slug ? ' selected' : '' ?>><?= e($service['name']) ?></option><?php endforeach; ?></select></label>
                <label class="field"><span>Tell us about the job *</span><textarea name="message" rows="6" required minlength="10" maxlength="3000" placeholder="What needs fixing or improving? Include other services, preferred timing and useful access details."><?= e((string) ($_POST['message'] ?? '')) ?></textarea><small class="field-hint">Please include at least 10 characters.</small></label>
                <div class="whatsapp-handoff"><?= icon('chat') ?><p><strong>Review before sending</strong><span>We’ll organise your details into one WhatsApp message. Check it, then tap Send in WhatsApp.</span></p></div>
                <button class="button button-primary button-submit" type="submit">Review quote in WhatsApp <?= icon('arrow', 'button-icon') ?></button>
                <p class="form-privacy">Nothing is sent until you tap Send in WhatsApp. By continuing, you agree to our <a href="privacy.php">privacy policy</a>.</p>
            </form>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>

