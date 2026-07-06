<?php
/**
 * Template for the Pricing page.
 * WordPress automatically loads this file for any page whose slug is "pricing".
 */
get_header();
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow">Pricing</span>
    <h1>Pricing &amp; Packages</h1>
    <p>Every business is different, so final pricing depends on your specific requirements. Below are our standard packages to help you understand what's included. Contact us for a detailed quote based on your project.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="pricing-grid">

      <div class="price-card">
        <span class="tag">Starter</span>
        <h3>Starter Website Package</h3>
        <p class="desc">For small businesses that need a professional business website.</p>
        <div class="price-line">Starting from</div>
        <div class="price-note">Request Quote</div>
        <ul>
          <li><span class="check">✓</span> Professional WordPress website (up to 5 pages)</li>
          <li><span class="check">✓</span> Mobile-responsive design</li>
          <li><span class="check">✓</span> Basic on-page SEO setup</li>
          <li><span class="check">✓</span> Contact form integration</li>
          <li><span class="check">✓</span> Fast loading, clean design</li>
          <li><span class="check">✓</span> 15 days post-launch support</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline">Request Quote</a>
      </div>

      <div class="price-card featured">
        <span class="tag">Most Popular</span>
        <h3>E-commerce Launch Package</h3>
        <p class="desc">For businesses that want a complete WooCommerce online store.</p>
        <div class="price-line">Starting from</div>
        <div class="price-note">Request Quote</div>
        <ul>
          <li><span class="check">✓</span> Full WooCommerce store setup</li>
          <li><span class="check">✓</span> Product upload (based on agreed quantity)</li>
          <li><span class="check">✓</span> Payment gateway &amp; shipping setup</li>
          <li><span class="check">✓</span> Category &amp; product page design</li>
          <li><span class="check">✓</span> Mobile-responsive checkout flow</li>
          <li><span class="check">✓</span> Basic SEO setup</li>
          <li><span class="check">✓</span> 30 days post-launch support</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">Request Quote</a>
      </div>

      <div class="price-card">
        <span class="tag">Growth</span>
        <h3>Growth &amp; Automation Package</h3>
        <p class="desc">For businesses that need AI automation, SEO, analytics, chatbot, and monthly technical support.</p>
        <div class="price-line">Starting from</div>
        <div class="price-note">Request Quote</div>
        <ul>
          <li><span class="check">✓</span> Everything in E-commerce Launch Package</li>
          <li><span class="check">✓</span> AI chatbot setup</li>
          <li><span class="check">✓</span> AI automation for repetitive tasks</li>
          <li><span class="check">✓</span> Advanced SEO setup</li>
          <li><span class="check">✓</span> Analytics &amp; performance tracking</li>
          <li><span class="check">✓</span> Monthly technical support</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline">Request Quote</a>
      </div>

    </div>

    <p style="text-align:center; margin-top:34px; font-size:0.92rem;">Pricing depends on the size, features, and platform (WordPress, WooCommerce, or Magento 2) of your project. Contact us for an accurate quote tailored to your business.</p>
  </div>
</section>

<section class="section section--tight">
  <div class="container">
    <div class="final-cta">
      <h2>Need a Custom Package?</h2>
      <p>If your project doesn't fit these packages, we'll create a custom plan for you.</p>
      <div class="ctas">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-white">Get Free Consultation</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
