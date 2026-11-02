<?php
declare(strict_types=1);

/*
 * Multi Fix Crew — central site settings.
 * Replace the placeholder contact details below before going live.
 */
const SITE_NAME = 'Multi Fix Crew';
const SITE_TAGLINE = 'One crew. Every fix. Done properly.';
const SITE_URL = 'https://www.multifixcrew.com';
const CONTACT_EMAIL = 'hello@multifixcrew.com';
const CEO_NAME = 'Moin Khan';
const CEO_PHONE_DISPLAY = '+971 54 179 8520';
const CEO_PHONE_LINK = '+971541798520';
const CEO_WHATSAPP_NUMBER = '971541798520';
const OPERATIONS_LEAD_NAME = 'Asim';
const OPERATIONS_LEAD_PHONE_DISPLAY = '+971 50 926 4761';
const OPERATIONS_LEAD_PHONE_LINK = '+971509264761';
const OPERATIONS_LEAD_WHATSAPP_NUMBER = '971509264761';
const OPERATIONS_LEAD_EXPERIENCE_YEARS = 12;
const PHONE_DISPLAY = CEO_PHONE_DISPLAY;
const PHONE_LINK = CEO_PHONE_LINK;
const WHATSAPP_NUMBER = CEO_WHATSAPP_NUMBER;
const SERVICE_AREA = 'Homes, offices & managed properties';
const FORM_RECIPIENT = 'hello@multifixcrew.com';

$services = [
    'ac-services' => [
        'name' => 'AC Services',
        'eyebrow' => 'Stay comfortable',
        'short' => 'Cooling checks, cleaning, maintenance and common AC repairs for homes and workplaces.',
        'intro' => 'From weak airflow to routine maintenance, we help keep your cooling system comfortable, efficient and dependable.',
        'features' => ['AC inspection and diagnosis', 'Filter and coil cleaning', 'Cooling and airflow issues', 'Routine maintenance'],
        'icon' => 'snowflake',
        'number' => '01',
    ],
    'plumbing' => [
        'name' => 'Plumbing',
        'eyebrow' => 'Stop leaks early',
        'short' => 'Practical help for leaks, taps, drains, fixtures and everyday plumbing problems.',
        'intro' => 'We diagnose everyday plumbing issues carefully and complete clean, practical repairs with minimal disruption.',
        'features' => ['Leak checks and repair', 'Tap and fixture fitting', 'Drainage troubleshooting', 'Bathroom and kitchen plumbing'],
        'icon' => 'droplet',
        'number' => '02',
    ],
    'carpentry' => [
        'name' => 'Carpentry',
        'eyebrow' => 'Made to fit',
        'short' => 'Repairs, adjustments and custom woodwork finished with care and attention to detail.',
        'intro' => 'Whether something needs repairing, adjusting or building to fit, our carpentry work is planned around your space.',
        'features' => ['Door and cabinet repairs', 'Shelving and storage', 'Wooden fixtures and fittings', 'Small custom projects'],
        'icon' => 'hammer',
        'number' => '03',
    ],
    'electrical' => [
        'name' => 'Electrical',
        'eyebrow' => 'Safe, careful work',
        'short' => 'Support for lighting, sockets, switches, fittings and common electrical faults.',
        'intro' => 'We approach electrical work carefully, explain the issue clearly and help restore the everyday essentials you rely on.',
        'features' => ['Lighting installation', 'Switch and socket work', 'Fault checks', 'Fixture replacement'],
        'icon' => 'bolt',
        'number' => '04',
    ],
    'painting' => [
        'name' => 'Painting',
        'eyebrow' => 'A cleaner finish',
        'short' => 'Interior and exterior painting with thoughtful preparation and a crisp, even finish.',
        'intro' => 'Good painting starts before the first coat. We prepare surfaces, protect your space and focus on clean edges and consistent coverage.',
        'features' => ['Interior wall painting', 'Exterior touch-ups', 'Surface preparation', 'Doors, trims and feature walls'],
        'icon' => 'paint',
        'number' => '05',
    ],
    'cleaning' => [
        'name' => 'Cleaning',
        'eyebrow' => 'Fresh from corner to corner',
        'short' => 'Detailed home, office and post-work cleaning tailored to the condition of your space.',
        'intro' => 'Choose a focused clean or a more detailed reset. We plan the work around the rooms, surfaces and finish you need.',
        'features' => ['Home and office cleaning', 'Deep cleaning', 'Move-in and move-out cleaning', 'Post-maintenance clean-up'],
        'icon' => 'sparkles',
        'number' => '06',
    ],
    'moving' => [
        'name' => 'Moving',
        'eyebrow' => 'Move with less stress',
        'short' => 'Careful support for packing, lifting, transport coordination and settling into your new space.',
        'intro' => 'We help make moving day simpler with an organised approach to handling, loading and placing your belongings.',
        'features' => ['Home and office moves', 'Packing support', 'Furniture handling', 'Loading and placement'],
        'icon' => 'truck',
        'number' => '07',
    ],
    'gypsum-works' => [
        'name' => 'Gypsum Works',
        'eyebrow' => 'Shape your space',
        'short' => 'Neat gypsum partitions, ceiling features, repairs and finishing for modern interiors.',
        'intro' => 'From practical partitions to clean ceiling details, we deliver gypsum work designed to sit naturally within your interior.',
        'features' => ['Partition walls', 'Ceiling features', 'Gypsum repair', 'Jointing and finishing'],
        'icon' => 'layers',
        'number' => '08',
    ],
];

$faqs = [
    [
        'question' => 'What kinds of properties do you work in?',
        'answer' => 'We support common maintenance needs in homes, apartments, offices and small commercial spaces. Share a few details in your request and we will confirm whether the job fits our scope.',
    ],
    [
        'question' => 'Can I request more than one service?',
        'answer' => 'Yes. Multi-service jobs are exactly where one coordinated crew can make things easier. List everything you need in the quote form so we can plan the right visit.',
    ],
    [
        'question' => 'How do quotations work?',
        'answer' => 'Tell us what needs attention and include useful details such as the property type and preferred timing. We will review the request, clarify anything needed and provide the next step before work begins.',
    ],
    [
        'question' => 'Do I need to provide materials?',
        'answer' => 'That depends on the job. We can discuss materials, finishes and any items you have already purchased when reviewing your request.',
    ],
    [
        'question' => 'How should I prepare for a visit?',
        'answer' => 'Please make the work area accessible and let us know about parking, building access or time restrictions. For moving work, a brief item list helps us plan accurately.',
    ],
    [
        'question' => 'How do I book?',
        'answer' => 'Use the request-a-quote form, call us or send a WhatsApp message. Include your required service, area and a short description of the work.',
    ],
];

