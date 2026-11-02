<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_set_cookie_params([
        'httponly' => true,
        'samesite' => 'Lax',
        'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
    ]);
    session_start();
}

function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function current_page(): string
{
    return basename((string) ($_SERVER['PHP_SELF'] ?? 'index.php'));
}

function is_active(string|array $pages): string
{
    return in_array(current_page(), (array) $pages, true) ? ' is-active' : '';
}

function service_by_slug(string $slug): ?array
{
    global $services;
    return $services[$slug] ?? null;
}

function csrf_token(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return (string) $_SESSION['csrf_token'];
}

function icon(string $name, string $class = 'icon'): string
{
    $paths = [
        'arrow' => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'arrow-up' => '<path d="M12 19V5M6 11l6-6 6 6"/>',
        'check' => '<path d="m5 12 4 4L19 6"/>',
        'chevron' => '<path d="m9 18 6-6-6-6"/>',
        'phone' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.63a2 2 0 0 1-.45 2.11L8 9.74a16 16 0 0 0 6 6l1.28-1.28a2 2 0 0 1 2.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0 1 22 16.92z"/>',
        'mail' => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>',
        'map' => '<path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/>',
        'clock' => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/><path d="m9 12 2 2 4-4"/>',
        'calendar' => '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 10h18"/>',
        'chat' => '<path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4Z"/>',
        'home' => '<path d="m3 11 9-8 9 8"/><path d="M5 10v10h14V10M9 20v-6h6v6"/>',
        'snowflake' => '<path d="M12 2v20M4.93 6 19.07 18M4.93 18 19.07 6M2 12h20"/><path d="m9 4 3 3 3-3M9 20l3-3 3 3M4 9l3 3-3 3M20 9l-3 3 3 3"/>',
        'droplet' => '<path d="M12 2s7 7.2 7 13a7 7 0 0 1-14 0C5 9.2 12 2 12 2Z"/><path d="M9 16c.5 1.3 1.5 2 3 2"/>',
        'hammer' => '<path d="m15 5 4 4M14 6l3-3 4 4-3 3M13 7 3 17v4h4L17 11"/>',
        'bolt' => '<path d="m13 2-9 12h7l-1 8 9-12h-7l1-8Z"/>',
        'paint' => '<path d="M14 4 4 14l6 6L20 10Z"/><path d="m14 4 2-2 6 6-2 2M4 14 2 16v4h4l2-2"/>',
        'sparkles' => '<path d="m12 3 1.2 3.8L17 8l-3.8 1.2L12 13l-1.2-3.8L7 8l3.8-1.2L12 3ZM5 14l.8 2.2L8 17l-2.2.8L5 20l-.8-2.2L2 17l2.2-.8L5 14ZM19 13l.7 1.8 1.8.7-1.8.7L19 18l-.7-1.8-1.8-.7 1.8-.7L19 13Z"/>',
        'truck' => '<path d="M10 17h4V5H2v12h3M14 9h4l4 4v4h-3"/><circle cx="7.5" cy="17.5" r="2.5"/><circle cx="16.5" cy="17.5" r="2.5"/>',
        'layers' => '<path d="m12 2 9 5-9 5-9-5 9-5Z"/><path d="m3 12 9 5 9-5M3 17l9 5 9-5"/>',
        'clipboard' => '<rect x="5" y="4" width="14" height="18" rx="2"/><path d="M9 4V2h6v2M9 10h6M9 14h6"/>',
        'tools' => '<path d="M14.7 6.3a4 4 0 0 0-5-5L12 3.6 9.6 6 7.3 3.7a4 4 0 0 0 5 5L20.6 17a2 2 0 1 1-2.8 2.8l-8.3-8.3"/><path d="m6 14-4 4 4 4 4-4"/>',
        'smile' => '<circle cx="12" cy="12" r="9"/><path d="M8 14s1.5 2 4 2 4-2 4-2M9 9h.01M15 9h.01"/>',
    ];

    $path = $paths[$name] ?? $paths['tools'];
    return '<svg class="' . e($class) . '" viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">' . $path . '</svg>';
}

function handle_inquiry(string $formType): array
{
    global $services;
    $result = ['status' => null, 'message' => '', 'errors' => []];

    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || ($_POST['form_type'] ?? '') !== $formType) {
        return $result;
    }

    if (!hash_equals(csrf_token(), (string) ($_POST['csrf_token'] ?? ''))) {
        $result['errors'][] = 'Your form session expired. Please refresh the page and try again.';
        return $result;
    }

    if (!empty($_POST['website'])) {
        $result['status'] = 'success';
        return $result;
    }

    $name = trim((string) ($_POST['name'] ?? ''));
    $email = trim((string) ($_POST['email'] ?? ''));
    $phone = trim((string) ($_POST['phone'] ?? ''));
    $service = trim((string) ($_POST['service'] ?? ''));
    $location = trim((string) ($_POST['location'] ?? ''));
    $message = trim((string) ($_POST['message'] ?? ''));

    if (strlen($name) < 2 || strlen($name) > 100) {
        $result['errors'][] = 'Please enter your name.';
    }
    if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result['errors'][] = 'Please enter a valid email address.';
    }
    if ($phone === '' || strlen($phone) > 40) {
        $result['errors'][] = 'Please enter a valid phone number.';
    }
    if ($formType === 'quote' && !isset($services[$service])) {
        $result['errors'][] = 'Please choose a service.';
    }
    if (strlen($message) < 10 || strlen($message) > 3000) {
        $result['errors'][] = 'Please tell us a little more about the work (10–3000 characters).';
    }

    if ($result['errors']) {
        return $result;
    }

    $serviceName = $services[$service]['name'] ?? 'General enquiry';
    $safeEmail = str_replace(["\r", "\n"], '', $email);
    $subject = SITE_NAME . ' — ' . ($formType === 'quote' ? 'new quote request' : 'new message');
    $body = "Name: {$name}\nPhone: {$phone}\nEmail: {$email}\nService: {$serviceName}\nLocation: {$location}\n\nMessage:\n{$message}\n";
    $headers = [
        'From: ' . SITE_NAME . ' website <' . FORM_RECIPIENT . '>',
        'Reply-To: ' . ($safeEmail !== '' ? $safeEmail : FORM_RECIPIENT),
        'Content-Type: text/plain; charset=UTF-8',
    ];

    if (@mail(FORM_RECIPIENT, $subject, $body, implode("\r\n", $headers))) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        header('Location: thank-you.php?type=' . urlencode($formType));
        exit;
    }

    $result['errors'][] = 'We could not send your message right now. Please call or WhatsApp us instead.';
    return $result;
}

