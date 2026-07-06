<?php
/**
 * Template for the Portfolio page.
 * WordPress automatically loads this file for any page whose slug is "portfolio".
 */
get_header();
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow">Portfolio</span>
    <h1>Portfolio &amp; Case Studies</h1>
    <p>A look at the type of websites and online stores CartMento builds. Full case studies coming soon as new projects launch.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid-3">

      <div class="case-card">
        <div class="case-thumb"></div>
        <div class="case-body">
          <span class="case-tag">WooCommerce · Retail / Fashion</span>
          <h3>Complete WooCommerce Store Build</h3>
          <p>A complete WooCommerce store built from scratch, including product catalog setup, payment integration, and mobile-optimized checkout flow.</p>
          <div class="case-result">Result: [Add results — e.g., load time improvement, conversion increase]</div>
        </div>
      </div>

      <div class="case-card">
        <div class="case-thumb"></div>
        <div class="case-body">
          <span class="case-tag">Magento 2 · Electronics</span>
          <h3>Frontend Customization &amp; Speed</h3>
          <p>Custom frontend improvements to an existing Magento 2 store, focused on category page design and site speed.</p>
          <div class="case-result">Result: [Add results — e.g., speed improvement, bounce rate reduction]</div>
        </div>
      </div>

      <div class="case-card">
        <div class="case-thumb"></div>
        <div class="case-body">
          <span class="case-tag">AI Chatbot · Service Business</span>
          <h3>Chatbot &amp; Automation Setup</h3>
          <p>AI chatbot integration for lead capture and customer support automation on an existing WordPress website.</p>
          <div class="case-result">Result: [Add results — e.g., response time, leads captured]</div>
        </div>
      </div>

    </div>
    <p style="text-align:center; margin-top:36px; font-size:0.88rem; color:var(--grey-text);">These are placeholder projects representing our service scope. Replace with real client work, screenshots, and measurable results as projects are completed.</p>
  </div>
</section>

<section class="section section--tight">
  <div class="container">
    <div class="final-cta">
      <h2>Want Results Like These for Your Business?</h2>
      <p>Tell us about your project and let's get started.</p>
      <div class="ctas">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-white">Get Free Consultation</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
