(() => {
    'use strict';

    document.documentElement.classList.add('js');

    const header = document.querySelector('[data-header]');
    const menuToggle = document.querySelector('[data-menu-toggle]');
    const navigation = document.querySelector('[data-nav]');

    const updateHeader = () => {
        if (header) header.classList.toggle('is-scrolled', window.scrollY > 12);
    };

    const closeMenu = () => {
        if (!menuToggle || !navigation) return;
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Open menu');
        navigation.classList.remove('is-open');
        document.body.classList.remove('menu-open');
    };

    if (menuToggle && navigation) {
        menuToggle.addEventListener('click', () => {
            const opening = menuToggle.getAttribute('aria-expanded') !== 'true';
            menuToggle.setAttribute('aria-expanded', String(opening));
            menuToggle.setAttribute('aria-label', opening ? 'Close menu' : 'Open menu');
            navigation.classList.toggle('is-open', opening);
            document.body.classList.toggle('menu-open', opening);
        });

        navigation.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
        window.addEventListener('resize', () => {
            if (window.innerWidth > 900) closeMenu();
        });
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') closeMenu();
        });
    }

    document.querySelectorAll('[data-accordion]').forEach((accordion) => {
        accordion.querySelectorAll('.accordion-item > button').forEach((button) => {
            button.addEventListener('click', () => {
                const item = button.closest('.accordion-item');
                const willOpen = !item.classList.contains('is-open');

                accordion.querySelectorAll('.accordion-item').forEach((otherItem) => {
                    otherItem.classList.remove('is-open');
                    const otherButton = otherItem.querySelector(':scope > button');
                    if (otherButton) otherButton.setAttribute('aria-expanded', 'false');
                });

                if (willOpen) {
                    item.classList.add('is-open');
                    button.setAttribute('aria-expanded', 'true');
                }
            });
        });
    });

    const cleanLine = (value, fallback = 'Not provided') => {
        const cleaned = String(value ?? '').trim().replace(/\s+/g, ' ');
        return cleaned || fallback;
    };

    const cleanMessage = (value) => String(value ?? '').trim().replace(/\r\n?/g, '\n');

    document.querySelectorAll('[data-whatsapp-form]').forEach((form) => {
        form.addEventListener('submit', (event) => {
            if (!form.checkValidity()) return;

            const formData = new FormData(form);
            if (cleanLine(formData.get('website'), '') !== '') {
                event.preventDefault();
                return;
            }

            event.preventDefault();

            const requestType = form.dataset.requestType === 'quote' ? 'quote' : 'contact';
            const whatsappNumber = String(form.dataset.whatsappNumber || '').replace(/\D/g, '');
            const serviceSelect = form.querySelector('select[name="service"]');
            const serviceName = serviceSelect?.selectedOptions?.[0]?.textContent?.trim() || 'General enquiry';
            const submittedAt = new Intl.DateTimeFormat('en-GB', {
                dateStyle: 'medium',
                timeStyle: 'short',
            }).format(new Date());

            const isQuote = requestType === 'quote';
            const message = [
                `*${isQuote ? 'NEW QUOTE REQUEST' : 'NEW CUSTOMER ENQUIRY'}*`,
                '_Multi Fix Crew website_',
                '',
                '*CUSTOMER DETAILS*',
                `• Name: ${cleanLine(formData.get('name'))}`,
                `• Phone: ${cleanLine(formData.get('phone'))}`,
                `• Email: ${cleanLine(formData.get('email'))}`,
                `• Area / community: ${cleanLine(formData.get('location'))}`,
                '',
                `*${isQuote ? 'JOB DETAILS' : 'REQUEST DETAILS'}*`,
                `• Service: ${serviceName}`,
                '',
                '*CUSTOMER MESSAGE*',
                cleanMessage(formData.get('message')),
                '',
                '*REQUESTED NEXT STEP*',
                isQuote
                    ? 'Please review the job details and contact me to confirm the scope, availability and quotation process.'
                    : 'Please review my request and contact me with the recommended next step.',
                '',
                `Submitted: ${submittedAt}`,
                '_Reviewed and sent by the customer from the Multi Fix Crew website._',
            ].join('\n');

            if (whatsappNumber) {
                window.location.assign(`https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`);
            }
        });
    });

    const reveals = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
        reveals.forEach((element) => revealObserver.observe(element));
    } else {
        reveals.forEach((element) => element.classList.add('is-visible'));
    }

    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });
})();
