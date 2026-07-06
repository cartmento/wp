<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <span class="footer-logo">CartMento.</span>
        <p class="footer-tagline">Launch, Improve &amp; Automate Your Online Store</p>
        <div class="social-row">
          <a href="https://linkedin.com/company/cartmento" aria-label="LinkedIn">in</a>
          <a href="https://facebook.com/cartmento" aria-label="Facebook">f</a>
          <a href="https://instagram.com/cartmento" aria-label="Instagram">ig</a>
          <a href="https://youtube.com/@cartmento" aria-label="YouTube">yt</a>
          <a href="https://tiktok.com/@cartmento" aria-label="TikTok">tt</a>
          <a href="https://github.com/cartmento" aria-label="GitHub">gh</a>
        </div>
      </div>
      <div>
        <h4>Quick Links</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services</a></li>
          <li><a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>">Pricing</a></li>
          <li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>">Portfolio</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
        </ul>
      </div>
      <div>
        <h4>Services</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">WordPress Development</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">WooCommerce Development</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Magento 2 Development</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">AI Chatbot &amp; Automation</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Website Maintenance</a></li>
        </ul>
      </div>
      <div>
        <h4>Contact</h4>
        <ul>
          <li><a href="mailto:<?php echo esc_attr( get_option( 'admin_email' ) ); ?>"><?php echo esc_html( get_option( 'admin_email' ) ); ?></a></li>
          <li><p>Lahore, Pakistan — serving clients worldwide</p></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© <?php echo esc_html( date( 'Y' ) ); ?> CartMento. All rights reserved.</span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
