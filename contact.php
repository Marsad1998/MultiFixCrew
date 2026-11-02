<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$formResult = handle_inquiry('contact');
$pageTitle = 'Contact Us | Multi Fix Crew';
$pageDescription = 'Call, WhatsApp, email or send a message to Multi Fix Crew about your property maintenance needs.';
$bodyClass = 'contact-page';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero contact-hero">
    <div class="container page-hero-grid">
        <div class="reveal"><span class="eyebrow"><i></i> Contact</span><h1>Real people.<br>Clear answers.</h1></div>
        <div class="page-hero-side reveal"><p>Speak directly with the people who lead the work. Whether you have one repair or a complete maintenance list, we’ll help you plan the right next step.</p></div>
    </div>
</section>

<section class="leadership-contact section-pad" aria-labelledby="leadership-heading">
    <div class="container">
        <div class="leadership-heading reveal">
            <div>
                <span class="eyebrow eyebrow-light"><i></i> Leadership contacts</span>
                <h2 id="leadership-heading">The people behind<br>every promise.</h2>
            </div>
            <p>Direct access, experienced coordination and one team taking responsibility from the first conversation onward.</p>
        </div>

        <div class="leadership-profiles">
            <article class="ceo-profile reveal">
                <div class="ceo-profile-photo">
                    <img src="assets/images/moin-khan-ceo.jpeg" alt="Moin Khan, CEO of Multi Fix Crew" width="1254" height="1254">
                    <span class="leader-availability"><i></i> CEO · Direct contact</span>
                </div>
                <div class="ceo-profile-content">
                    <div class="profile-overline">
                        <span class="card-eyebrow">Chief Executive Officer</span>
                        <span class="profile-trust-label"><?= icon('check') ?> Company portrait provided</span>
                    </div>
                    <h3><?= e(CEO_NAME) ?></h3>
                    <p>Moin leads Multi Fix Crew with a practical, client-first approach. He stays close to the details—from the first conversation to final handover—helping the team deliver clear communication, reliable coordination and work the company can stand behind.</p>
                    <div class="profile-proof">
                        <span><?= icon('check') ?> Direct leadership contact</span>
                        <span><?= icon('check') ?> Available by call or WhatsApp</span>
                    </div>
                    <div class="profile-actions">
                        <a class="profile-call" href="tel:<?= e(CEO_PHONE_LINK) ?>"><?= icon('phone') ?><span><small>Call Moin</small><strong><?= e(CEO_PHONE_DISPLAY) ?></strong></span></a>
                        <a class="profile-whatsapp" href="https://wa.me/<?= e(CEO_WHATSAPP_NUMBER) ?>" target="_blank" rel="noopener" aria-label="WhatsApp Moin Khan"><?= icon('chat') ?><span>WhatsApp</span></a>
                    </div>
                </div>
            </article>

            <article class="operations-profile reveal reveal-delay">
                <div class="operations-identity">
                    <span class="operations-avatar" aria-hidden="true">A</span>
                    <div>
                        <span class="card-eyebrow">Direct operations contact</span>
                        <h3><?= e(OPERATIONS_LEAD_NAME) ?></h3>
                        <p>Operations Lead</p>
                    </div>
                </div>
                <div class="operations-details">
                    <div class="operations-experience">
                        <strong><?= e((string) OPERATIONS_LEAD_EXPERIENCE_YEARS) ?></strong>
                        <span>Years of hands-on<br>experience</span>
                    </div>
                    <p>With 12 years of hands-on experience, Asim helps turn every request into a clear, well-coordinated job. He supports day-to-day operations, team scheduling and on-site follow-through so clients always know what happens next.</p>
                    <div class="profile-disclosure">
                        <?= icon('check') ?>
                        <p><strong>Authentic profile</strong><span>No stock portrait or substitute image is used for Asim.</span></p>
                    </div>
                </div>
                <div class="operations-contact">
                    <span class="operations-contact-label">Your operations contact</span>
                    <p>For scheduling, team coordination and on-site follow-through.</p>
                    <div class="profile-actions">
                        <a class="profile-call" href="tel:<?= e(OPERATIONS_LEAD_PHONE_LINK) ?>"><?= icon('phone') ?><span><small>Call Asim</small><strong><?= e(OPERATIONS_LEAD_PHONE_DISPLAY) ?></strong></span></a>
                        <a class="profile-whatsapp profile-whatsapp-compact" href="https://wa.me/<?= e(OPERATIONS_LEAD_WHATSAPP_NUMBER) ?>" target="_blank" rel="noopener" aria-label="WhatsApp Asim"><?= icon('chat') ?><span>WhatsApp</span></a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="contact-section section-pad">
    <div class="container">
        <div class="contact-methods">
            <a class="contact-method reveal" href="tel:<?= e(PHONE_LINK) ?>"><span><?= icon('phone') ?></span><small>Call the CEO</small><strong><?= e(PHONE_DISPLAY) ?></strong><i><?= icon('arrow') ?></i></a>
            <a class="contact-method reveal" href="https://wa.me/<?= e(WHATSAPP_NUMBER) ?>" target="_blank" rel="noopener"><span><?= icon('chat') ?></span><small>WhatsApp Moin</small><strong>Start a conversation</strong><i><?= icon('arrow') ?></i></a>
            <a class="contact-method reveal" href="mailto:<?= e(CONTACT_EMAIL) ?>"><span><?= icon('mail') ?></span><small>Email us</small><strong><?= e(CONTACT_EMAIL) ?></strong><i><?= icon('arrow') ?></i></a>
        </div>
        <div class="contact-main">
            <div class="contact-copy reveal"><span class="eyebrow"><i></i> Send a message</span><h2>Not sure which service you need?</h2><p>Describe the issue in your own words. We’ll use your message to understand the right direction.</p><div class="contact-info-row"><?= icon('map') ?><p><strong>Service coverage</strong><small><?= e(SERVICE_AREA) ?></small></p></div><div class="contact-info-row"><?= icon('clock') ?><p><strong>Response</strong><small>We’ll reply as soon as the team is available.</small></p></div></div>
            <div class="form-card contact-form-card reveal">
                <?php if ($formResult['errors']): ?><div class="form-alert" role="alert"><strong>Please check the form:</strong><ul><?php foreach ($formResult['errors'] as $error): ?><li><?= e($error) ?></li><?php endforeach; ?></ul></div><?php endif; ?>
                <form method="post" action="contact.php" class="request-form" data-whatsapp-form data-whatsapp-number="<?= e(WHATSAPP_NUMBER) ?>" data-request-type="contact">
                    <input type="hidden" name="form_type" value="contact"><input type="hidden" name="csrf_token" value="<?= e(csrf_token()) ?>">
                    <div class="honeypot" aria-hidden="true"><label>Website<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
                    <div class="field-grid"><label class="field"><span>Your name *</span><input type="text" name="name" value="<?= e((string) ($_POST['name'] ?? '')) ?>" required autocomplete="name" placeholder="Full name"></label><label class="field"><span>Phone number *</span><input type="tel" name="phone" value="<?= e((string) ($_POST['phone'] ?? '')) ?>" required autocomplete="tel" placeholder="Your best contact number"></label></div>
                    <div class="field-grid"><label class="field"><span>Email address</span><input type="email" name="email" value="<?= e((string) ($_POST['email'] ?? '')) ?>" autocomplete="email" placeholder="you@example.com"></label><label class="field"><span>Area / community</span><input type="text" name="location" value="<?= e((string) ($_POST['location'] ?? '')) ?>" placeholder="Where is the property?"></label></div>
                    <label class="field"><span>Related service</span><select name="service"><option value="">General question</option><?php foreach ($services as $slug => $service): ?><option value="<?= e($slug) ?>"<?= (($_POST['service'] ?? '') === $slug) ? ' selected' : '' ?>><?= e($service['name']) ?></option><?php endforeach; ?></select></label>
                    <label class="field"><span>Your message *</span><textarea name="message" rows="6" required minlength="10" maxlength="3000" placeholder="How can we help?"><?= e((string) ($_POST['message'] ?? '')) ?></textarea></label>
                    <div class="whatsapp-handoff"><?= icon('chat') ?><p><strong>Review before sending</strong><span>We’ll prepare a WhatsApp message with these details. Check it, then tap Send in WhatsApp.</span></p></div>
                    <button class="button button-primary button-submit" type="submit">Review in WhatsApp <?= icon('arrow', 'button-icon') ?></button>
                    <p class="form-privacy">Nothing is sent until you tap Send in WhatsApp. By continuing, you agree to our <a href="privacy.php">privacy policy</a>.</p>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>

