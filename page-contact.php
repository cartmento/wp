<?php
/**
 * Template for the Contact page.
 * WordPress automatically loads this file for any page whose slug is "contact".
 * The form below posts to admin-post.php and is handled by
 * cartmento_handle_contact_form() in functions.php, which emails
 * the site admin via wp_mail(). No plugin required.
 */
get_header();

$status = isset( $_GET['cartmento_status'] ) ? sanitize_text_field( $_GET['cartmento_status'] ) : '';
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow">Contact</span>
    <h1>Let's Build or Improve Your Online Store</h1>
    <p>Tell us about your business and project, and we'll get back to you with the right solution. No pressure, no confusing sales talk — just honest advice.</p>
  </div>
</section>

<section class="section">
  <div class="container contact-grid">

    <div class="form-card">
      <h3 style="margin-bottom:22px;">Get Your Free Consultation</h3>

      <?php if ( 'success' === $status ) : ?>
        <div class="form-notice success">Thanks! Your message has been sent — we'll get back to you within 24 hours.</div>
      <?php elseif ( 'error' === $status ) : ?>
        <div class="form-notice error">Something went wrong. Please check your details and try again, or email us directly.</div>
      <?php endif; ?>

      <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
        <input type="hidden" name="action" value="cartmento_contact">
        <?php wp_nonce_field( 'cartmento_contact_submit', 'cartmento_contact_nonce' ); ?>

        <div class="form-row">
          <div class="field">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your full name" required>
          </div>
          <div class="field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" required>
          </div>
        </div>
        <div class="form-row">
          <div class="field">
            <label for="phone">Phone / WhatsApp</label>
            <input type="tel" id="phone" name="phone" placeholder="+92 300 0000000">
          </div>
          <div class="field">
            <label for="business">Business Name</label>
            <input type="text" id="business" name="business" placeholder="Your business name">
          </div>
        </div>
        <div class="form-row">
          <div class="field">
            <label for="website">Existing Website URL (if any)</label>
            <input type="url" id="website" name="website" placeholder="https://">
          </div>
          <div class="field">
            <label for="service">Required Service</label>
            <select id="service" name="service">
              <option>WordPress Development</option>
              <option>WooCommerce Development</option>
              <option>Magento 2 Development</option>
              <option>Website Maintenance</option>
              <option>AI Chatbot &amp; Automation</option>
              <option>SEO</option>
              <option>Other</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="field full">
            <label for="budget">Budget Range</label>
            <select id="budget" name="budget">
              <option>Under $300</option>
              <option>$300–$700</option>
              <option>$700–$1500</option>
              <option>$1500+</option>
              <option>Not Sure Yet</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="field full">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Tell us a bit about your project..."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center;">Send Message</button>
      </form>
    </div>

    <div>
      <div class="contact-info-card">
        <h3>Direct Contact</h3>
        <p>We typically respond within 24 hours.</p>
        <div class="contact-line"><span class="ico">✉️</span> <?php echo esc_html( get_option( 'admin_email' ) ); ?></div>
        <div class="contact-line"><span class="ico">📍</span> Lahore, Pakistan — serving clients worldwide</div>
        <div class="social-row">
          <a href="https://linkedin.com/company/cartmento" aria-label="LinkedIn">in</a>
          <a href="https://facebook.com/cartmento" aria-label="Facebook">f</a>
          <a href="https://instagram.com/cartmento" aria-label="Instagram">ig</a>
          <a href="https://youtube.com/@cartmento" aria-label="YouTube">yt</a>
          <a href="https://tiktok.com/@cartmento" aria-label="TikTok">tt</a>
          <a href="https://github.com/cartmento" aria-label="GitHub">gh</a>
        </div>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
