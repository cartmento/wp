<?php
/**
 * Template for the Services page.
 * WordPress automatically loads this file for any page whose slug is "services".
 * Create a Page in wp-admin, set its URL slug (permalink) to "services".
 */
get_header();
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow">Services</span>
    <h1>E-commerce &amp; Web Development Services</h1>
    <p>CartMento offers complete e-commerce development services — from building a brand-new store to improving, maintaining, and automating an existing one. Every service is built around one goal: helping your online store perform better.</p>
  </div>
</section>

<section class="section">
  <div class="container" style="max-width:840px;">

    <div class="service-block">
      <div class="ico-lg">🧩</div>
      <div>
        <h3>WordPress Website Development</h3>
        <p>Professional, mobile-friendly WordPress websites built for speed and easy management. Ideal for businesses that need a strong online presence with a clean, modern design.</p>
      </div>
    </div>

    <div class="service-block">
      <div class="ico-lg">🛒</div>
      <div>
        <h3>WooCommerce Store Development</h3>
        <p>Complete WooCommerce online stores, including product pages, categories, cart, checkout, payment gateways, and shipping setup — built to convert visitors into buyers.</p>
      </div>
    </div>

    <div class="service-block">
      <div class="ico-lg">⚙️</div>
      <div>
        <h3>Magento 2 Development &amp; Customization</h3>
        <p>Custom Magento 2 development including frontend theme customization, backend configuration, and performance improvements for stores that need more control and scalability.</p>
      </div>
    </div>

    <div class="service-block">
      <div class="ico-lg">🛠️</div>
      <div>
        <h3>E-commerce Website Maintenance</h3>
        <p>Regular updates, bug fixes, security checks, and technical support so your store stays fast, secure, and functional at all times.</p>
      </div>
    </div>

    <div class="service-block">
      <div class="ico-lg">📦</div>
      <div>
        <h3>Product Upload &amp; Catalog Management</h3>
        <p>Accurate, organized product uploads with proper categories, images, descriptions, and attributes — saving you hours of manual work.</p>
      </div>
    </div>

    <div class="service-block">
      <div class="ico-lg">💳</div>
      <div>
        <h3>Payment &amp; Shipping Setup</h3>
        <p>Correct configuration of payment gateways and shipping methods so customers can check out smoothly, without errors or delays.</p>
      </div>
    </div>

    <div class="service-block">
      <div class="ico-lg">⚡</div>
      <div>
        <h3>Website Speed Optimization</h3>
        <p>Technical improvements to reduce load time, improve Core Web Vitals, and keep visitors from leaving before they buy.</p>
      </div>
    </div>

    <div class="service-block">
      <div class="ico-lg">🔍</div>
      <div>
        <h3>SEO Setup</h3>
        <p>On-page SEO setup including metadata, site structure, and technical basics to help your store get found on Google.</p>
      </div>
    </div>

    <div class="service-block">
      <div class="ico-lg">💬</div>
      <div>
        <h3>AI Chatbot Setup</h3>
        <p>AI-powered chatbots that answer customer questions, guide visitors to products, and capture leads — available around the clock.</p>
      </div>
    </div>

    <div class="service-block">
      <div class="ico-lg">🤖</div>
      <div>
        <h3>AI Automation for E-commerce</h3>
        <p>Automation for repetitive tasks such as order updates, product descriptions, and customer follow-ups, using AI tools built into your workflow.</p>
      </div>
    </div>

    <div class="service-block">
      <div class="ico-lg">🎯</div>
      <div>
        <h3>Landing Page Design</h3>
        <p>High-converting landing pages for promotions, product launches, and ad campaigns, designed with a clear call to action.</p>
      </div>
    </div>

    <div class="service-block" style="border-bottom:none;">
      <div class="ico-lg">🔄</div>
      <div>
        <h3>Website Redesign</h3>
        <p>Modern redesigns for outdated WordPress, WooCommerce, or Magento 2 websites — improving both appearance and performance.</p>
      </div>
    </div>

  </div>
</section>

<section class="section section--tight">
  <div class="container">
    <div class="final-cta">
      <h2>Not Sure Which Service You Need?</h2>
      <p>Tell us about your business and we'll recommend the right solution.</p>
      <div class="ctas">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-white">Get Free Consultation</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
