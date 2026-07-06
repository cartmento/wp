<?php
/**
 * 404 Error Page
 * Branded "page not found" screen matching the CartMento design system.
 */
get_header();
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow">Error 404</span>
    <h1>This Page Took a Wrong Turn</h1>
    <p>The page you're looking for doesn't exist — it may have been moved, renamed, or the link may be outdated. Let's get you back on track.</p>
  </div>
</section>

<section class="section">
  <div class="container" style="max-width:760px; text-align:center;">

    <div class="cart-track" style="justify-content:center; margin-bottom:50px;">
      <div class="node filled"><span class="dot-mark"></span><span>You are here</span></div>
      <div class="line"></div>
      <div class="node"><span class="dot-mark"></span><span>404</span></div>
      <div class="line"></div>
      <div class="node"><span class="dot-mark"></span><span>Home</span></div>
    </div>

    <div class="section-head center">
      <h2>Try one of these instead</h2>
      <p>Here are the pages most people are looking for.</p>
    </div>

    <div class="grid-3" style="text-align:left;">
      <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="card" style="display:block;">
        <div class="ico">🧩</div>
        <h3>Services</h3>
        <p>WordPress, WooCommerce, Magento 2, and AI automation.</p>
      </a>
      <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="card" style="display:block;">
        <div class="ico">💳</div>
        <h3>Pricing</h3>
        <p>Simple packages for every stage of your store.</p>
      </a>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="card" style="display:block;">
        <div class="ico">✉️</div>
        <h3>Contact</h3>
        <p>Get a free consultation for your project.</p>
      </a>
    </div>

    <?php if ( function_exists( 'get_search_form' ) ) : ?>
      <div style="margin-top:48px;">
        <?php get_search_form(); ?>
      </div>
    <?php endif; ?>

  </div>
</section>

<section class="section section--tight">
  <div class="container">
    <div class="final-cta">
      <h2>Still Can't Find What You Need?</h2>
      <p>Tell us what you're looking for and we'll point you in the right direction.</p>
      <div class="ctas">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-white">Back to Homepage</a>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline-light">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
