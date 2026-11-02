# Multi Fix Crew website

A responsive, multi-page PHP website designed for shared hosting such as Hostinger.

## Before publishing

Open `includes/config.php` and replace these placeholders:

- `SITE_URL`
- `CONTACT_EMAIL` and `FORM_RECIPIENT`
- `PHONE_DISPLAY` and `PHONE_LINK`
- `WHATSAPP_NUMBER`
- `SERVICE_AREA`

For reliable form delivery on Hostinger, create an email account on the same domain and use it for `FORM_RECIPIENT`. If PHP `mail()` is disabled on the hosting plan, replace the mail section in `includes/helpers.php` with authenticated SMTP through PHPMailer.

## Upload to Hostinger

1. Upload all files and folders to `public_html` using Hostinger File Manager or FTP.
2. Confirm the domain points to the hosting plan.
3. Select a current PHP version (PHP 8.1 or newer is recommended).
4. Update the contact settings in `includes/config.php`.
5. Submit a real test message and confirm it arrives.

## Local preview

With PHP installed, run:

```text
php -S localhost:8080
```

Then open `http://localhost:8080`.

