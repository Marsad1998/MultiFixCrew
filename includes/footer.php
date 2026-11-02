<?php
declare(strict_types=1);
?>
</main>
<footer class="site-footer">
    <div class="container footer-main">
        <div class="footer-brand">
            <a class="brand brand-light" href="index.php">
                <span class="brand-mark" aria-hidden="true"><span>M</span><i></i></span>
                <span class="brand-copy"><strong>Multi Fix</strong><small>Crew</small></span>
            </a>
            <p>Practical maintenance, careful workmanship and one simple point of contact for your space.</p>
            <a class="footer-phone" href="tel:<?= e(PHONE_LINK) ?>"><?= icon('phone') ?> <?= e(PHONE_DISPLAY) ?></a>
        </div>
        <div class="footer-column">
            <h2>Explore</h2>
            <a href="about.php">About us</a>
            <a href="process.php">How it works</a>
            <a href="service-areas.php">Service areas</a>
            <a href="faq.php">FAQs</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="footer-column footer-services">
            <h2>Services</h2>
            <?php foreach (array_slice($services, 0, 6, true) as $slug => $service): ?>
                <a href="service.php?slug=<?= e($slug) ?>"><?= e($service['name']) ?></a>
            <?php endforeach; ?>
        </div>
        <div class="footer-column footer-action">
            <h2>Need something fixed?</h2>
            <p>Tell us what you need and we’ll help you plan the next step.</p>
            <a class="button button-accent" href="quote.php">Get a free quote <?= icon('arrow', 'button-icon') ?></a>
            <a class="whatsapp-link" href="https://wa.me/<?= e(WHATSAPP_NUMBER) ?>" target="_blank" rel="noopener">Message on WhatsApp</a>
        </div>
    </div>
    <div class="container footer-bottom">
        <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. All rights reserved.</p>
        <div><a href="privacy.php">Privacy</a><a href="terms.php">Terms</a></div>
    </div>
</footer>
<a class="floating-quote" href="quote.php" aria-label="Request a quote"><?= icon('clipboard') ?><span>Get a quote</span></a>
</body>
</html>

