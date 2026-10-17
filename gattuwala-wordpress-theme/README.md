# Gattuwala Industrial — WordPress Theme

A responsive custom WordPress theme for Gattuwala Energy Solutions. It uses a modern industrial B2B visual direction inspired by the reference site, while keeping the copy and visual identity original.

## Included
- Responsive homepage, header, mobile navigation and footer
- Custom post types: Products, Services, Installed Plants
- Product category taxonomy
- Product archive and single-product templates
- Service and installed plant archive/single templates
- About and Contact page templates
- Contact enquiry form shortcode: `[gattuwala_contact_form]`
- Basic reveal-on-scroll motion and reduced-motion support
- Editable page/post content and featured images through WordPress admin

## Installation
1. Back up your current website and database.
2. In WordPress Admin, go to **Appearance → Themes → Add New → Upload Theme**.
3. Upload `gattuwala-industrial.zip`, install and activate.
4. Go to **Settings → Permalinks** and click **Save Changes** once to refresh custom post type URLs.
5. Go to **Appearance → Customize → Site Identity** and upload the official Gattuwala logo.
6. Go to **Appearance → Menus**. Create a Primary menu and assign it to **Primary Menu**. Create a Footer menu and assign it to **Footer Menu**.
7. Create pages:
   - Home (set it as the homepage in **Settings → Reading**; the `front-page.php` template is used automatically)
   - About Us (choose the **About Gattuwala** template)
   - Contact Us (choose the **Contact Gattuwala** template)
   - Services (optional landing page; service archive is available at `/services/`)
   - Installed Plants (archive at `/projects/`)
   - Products (archive at `/products/`)
8. Add product items under **Products**, service items under **Services**, and installation stories under **Installed Plants**. Add featured images, excerpts, descriptions and categories.
9. Configure WordPress **Settings → General → Administration Email Address**. The contact form uses `wp_mail()` and sends to this address. For reliable delivery, configure SMTP using your host or an SMTP plugin and test the form.
10. Replace demo hero imagery and all placeholder project content with approved Gattuwala-owned images. Confirm contact details and claims before publishing.

## Important notes
- The theme is a starter implementation, not a direct copy of the reference website.
- Hero and solutions imagery currently use remote Unsplash demo images. Replace them with optimized, licensed images in production.
- The displayed “100+” installation statement is based on publicly stated Gattuwala content; verify it before launch.
- Product archive slugs: `/products/`, services: `/services/`, installed plants: `/projects/`.
- This theme does not include WooCommerce, CRM integration, multilingual setup, or a brochure library. Those can be added if required.
- Test on a staging site before activating on the live website.
