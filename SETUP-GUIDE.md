# CartMento WordPress Theme — Setup Guide

This is a real, installable WordPress theme (not a static HTML preview). It includes
proper PHP templates, a working contact form (no plugin required), and the full
CartMento design and copy.

## What's in this package

```
cartmento-theme/
├── style.css          ← Theme header + all design CSS (required by WordPress)
├── functions.php       ← Theme setup, menu registration, asset loading, contact form handler
├── header.php           ← Site header (logo, nav, mobile menu)
├── footer.php            ← Site footer
├── front-page.php         ← Homepage content (loads automatically as the site's front page)
├── page-services.php       ← Services page (auto-loads for a page with slug "services")
├── page-pricing.php         ← Pricing page (auto-loads for a page with slug "pricing")
├── page-portfolio.php        ← Portfolio page (auto-loads for a page with slug "portfolio")
├── page-contact.php           ← Contact page + working form (auto-loads for slug "contact")
├── page.php                    ← Fallback template for any other page (e.g. Privacy Policy)
├── index.php                    ← Required WordPress fallback template
└── js/main.js                    ← Mobile menu + FAQ accordion behavior
```

## Step 1 — Get hosting and install WordPress

You'll need real hosting with PHP + MySQL (this cannot run inside a chat environment).
Common beginner-friendly options: Hostinger, SiteGround, Bluehost, or any host with
one-click WordPress install. Point your `cartmento.com` domain to that hosting.

## Step 2 — Upload the theme

1. Zip the `cartmento-theme` folder (if it isn't already a `.zip`).
2. In wp-admin, go to **Appearance → Themes → Add New → Upload Theme**.
3. Upload the zip, then click **Activate**.

## Step 3 — Create the 5 pages

Go to **Pages → Add New** and create these pages. **The page slug (URL) must match
exactly** — that's how WordPress knows to use each template automatically:

| Page Title | Slug (URL) | Notes |
|---|---|---|
| Home | `home` (or anything) | Set as your front page in Step 4 |
| Services | `services` | Leave content blank — template has the content built in |
| Pricing | `pricing` | Leave content blank |
| Portfolio | `portfolio` | Leave content blank |
| Contact | `contact` | Leave content blank |

You can publish these pages with empty content — the design and copy are already
built into each PHP template. (Later, if you want to edit copy through wp-admin
instead of code, that's a natural next step — see "Making content editable" below.)

## Step 4 — Set your homepage

Go to **Settings → Reading** → set "Your homepage displays" to **A static page** →
choose your **Home** page. (Even without this, `front-page.php` will usually load
automatically as the front page template.)

## Step 5 — Set up the navigation menu (optional but recommended)

Go to **Appearance → Menus**, create a menu named "Primary", add your 5 pages,
and assign it to the **Primary Menu** location. If you skip this, the theme
automatically falls back to a built-in menu with the same 5 links, so the site
still works.

## Step 6 — Set permalinks

Go to **Settings → Permalinks** and choose **Post name**. This makes URLs look
like `cartmento.com/services` instead of `cartmento.com/?p=12`.

## Step 7 — Make the contact form send email reliably

The form uses WordPress's built-in `wp_mail()` function, which works out of the
box on many hosts but can be unreliable on some shared hosting (emails landing
in spam or not sending at all). To fix this properly:

1. Install the free plugin **WP Mail SMTP**.
2. Connect it to a real email service (Gmail, Google Workspace, or your hosting's SMTP).
3. Once set up, form submissions from `cartmento@gmail.com` (or your future
   `hello@cartmento.com`) will land reliably in your inbox.

Until you do this, you can still test the form — it will show a success or error
message on the page.

## Step 8 — Set your site admin email

Go to **Settings → General → Administration Email Address** and set it to
`cartmento@gmail.com` (or `hello@cartmento.com` later). This is the address that
receives contact form submissions and shows in the footer/contact page.

## Step 9 — Recommended plugins (from the original plan)

- **Rank Math** or **Yoast SEO** — on-page SEO, sitemaps
- **WP Rocket** or **LiteSpeed Cache** — speed/caching
- **Smush** or **ShortPixel** — image compression
- **Wordfence Security** — firewall & malware scanning
- **UpdraftPlus** — automated backups
- **WP Mail SMTP** — reliable contact form email delivery

## Making content editable later (optional next step)

Right now, page copy lives directly in the PHP template files (that's what makes
this a working MVP without needing a page builder). If you'd like to edit text,
prices, or FAQs from wp-admin instead of code later on, the natural upgrade path is:

- Add **Advanced Custom Fields (ACF)** and convert key sections (pricing, FAQ,
  portfolio items) into custom fields, or
- Rebuild the same sections visually in **Elementor** or **Bricks**, using this
  theme purely as the base styling.

## Troubleshooting

- **Blank white page after activating** → Check your PHP version is 7.4+ (ideally
  8.x). Enable `WP_DEBUG` in `wp-config.php` to see the actual error.
- **Fonts or icons look different than expected** → The theme loads Google Fonts
  (Space Grotesk, Inter, IBM Plex Mono) via `wp_enqueue_style`; make sure your
  host allows outbound requests to `fonts.googleapis.com`.
- **Contact form not sending email** → Install WP Mail SMTP (Step 7) — this is
  the most common WordPress email issue and isn't specific to this theme.
- **Pages showing default WordPress look, not the CartMento design** → Double-check
  the page slug exactly matches `services`, `pricing`, `portfolio`, or `contact`.
