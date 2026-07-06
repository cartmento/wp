<?php
/**
 * Front Page Template
 * This displays automatically when a static front page is set
 * under Settings > Reading > "A static page" (Homepage).
 */
get_header();
?>

<section class="hero">
  <div class="container hero-grid">
    <div>
      <span class="eyebrow">AI-Powered E-commerce Development</span>
      <h1>Launch, Improve &amp; Automate Your Online Store</h1>
      <p class="lead">CartMento builds high-performing WordPress, WooCommerce, and Magento 2 stores with AI-powered automation, SEO setup, payment integration, and conversion-focused design.</p>
      <div class="hero-ctas">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">Get Free Consultation</a>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline">View Services</a>
      </div>
      <div class="cart-track" aria-hidden="true">
        <div class="node filled"><span class="dot-mark"></span><span>Build</span></div>
        <div class="line"></div>
        <div class="node filled"><span class="dot-mark"></span><span>Launch</span></div>
        <div class="line"></div>
        <div class="node"><span class="dot-mark"></span><span>Automate</span></div>
      </div>
    </div>
    <div class="hero-visual">
      <div class="browser-chrome"><span></span><span></span><span></span></div>
      <div class="mock-card">
        <div class="bar short"></div>
        <div class="bar" style="width:80%"></div>
        <div class="bar blue"></div>
      </div>
      <div class="mock-grid">
        <div class="tile"><div class="bar" style="background:rgba(255,255,255,.2)"></div></div>
        <div class="tile"><div class="bar" style="background:rgba(255,255,255,.2)"></div></div>
        <div class="tile"><div class="bar" style="background:rgba(255,255,255,.2)"></div></div>
      </div>
    </div>
  </div>
</section>

<section class="trust-strip">
  <div class="container">
    <div class="trust-item"><span class="ico">🧩</span> WordPress &amp; WooCommerce Development</div>
    <div class="trust-item"><span class="ico">⚙️</span> Magento 2 Customization</div>
    <div class="trust-item"><span class="ico">💬</span> AI Chatbot &amp; Automation</div>
    <div class="trust-item"><span class="ico">⚡</span> SEO, Speed &amp; Conversion Optimization</div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">What We Do</span>
      <h2>Everything Your Online Store Needs, in One Place</h2>
      <p>From building a brand-new store to fixing and automating an existing one, CartMento covers the full journey.</p>
    </div>
    <div class="grid-3">
      <div class="card">
        <div class="ico">🧩</div>
        <h3>WordPress Website Development</h3>
        <p>Fast, professional business websites built on WordPress.</p>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="card-link">Learn more →</a>
      </div>
      <div class="card">
        <div class="ico">🛒</div>
        <h3>WooCommerce Store Development</h3>
        <p>Complete online stores ready to accept orders and payments.</p>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="card-link">Learn more →</a>
      </div>
      <div class="card">
        <div class="ico">⚙️</div>
        <h3>Magento 2 Development &amp; Customization</h3>
        <p>Custom frontend and backend work for Magento 2 stores.</p>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="card-link">Learn more →</a>
      </div>
      <div class="card">
        <div class="ico">💬</div>
        <h3>AI Chatbot &amp; Automation</h3>
        <p>Automated customer replies, order updates, and lead capture.</p>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="card-link">Learn more →</a>
      </div>
      <div class="card">
        <div class="ico">⚡</div>
        <h3>SEO &amp; Speed Optimization</h3>
        <p>Get found on Google and keep visitors from bouncing.</p>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="card-link">Learn more →</a>
      </div>
      <div class="card">
        <div class="ico">🛠️</div>
        <h3>Website Maintenance &amp; Support</h3>
        <p>Ongoing fixes, updates, and technical support.</p>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="card-link">Learn more →</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--grey">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Why CartMento</span>
      <h2>Why Businesses Choose CartMento</h2>
    </div>
    <div class="why-grid">
      <div class="why-item">
        <span class="num">01</span>
        <h3>Real Development Experience</h3>
        <p>Built and customized real WordPress, WooCommerce, and Magento 2 stores — not just templates.</p>
      </div>
      <div class="why-item">
        <span class="num">02</span>
        <h3>E-commerce Focused</h3>
        <p>We specialize in online stores, not generic websites.</p>
      </div>
      <div class="why-item">
        <span class="num">03</span>
        <h3>AI-Powered Efficiency</h3>
        <p>Automation tools that save you time and reduce manual work.</p>
      </div>
      <div class="why-item">
        <span class="num">04</span>
        <h3>Ongoing Support</h3>
        <p>We don't disappear after launch. Monthly support keeps your store running.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">How It Works</span>
      <h2>How We Build Your Store</h2>
    </div>
    <div class="process-track">
      <div class="process-step">
        <div class="process-connector"></div>
        <div class="marker"><span>01</span></div>
        <h3>Discover</h3>
        <p>We understand your business, products, and goals.</p>
      </div>
      <div class="process-step">
        <div class="process-connector"></div>
        <div class="marker"><span>02</span></div>
        <h3>Plan</h3>
        <p>We map out the structure, features, and technology fit.</p>
      </div>
      <div class="process-step">
        <div class="process-connector"></div>
        <div class="marker"><span>03</span></div>
        <h3>Design &amp; Develop</h3>
        <p>We build your store on WordPress, WooCommerce, or Magento 2.</p>
      </div>
      <div class="process-step">
        <div class="process-connector"></div>
        <div class="marker"><span>04</span></div>
        <h3>Test &amp; Launch</h3>
        <p>We test checkout, payments, and speed before going live.</p>
      </div>
      <div class="process-step">
        <div class="marker"><span>05</span></div>
        <h3>Support &amp; Automate</h3>
        <p>We add AI automation and provide ongoing maintenance.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section--grey">
  <div class="container split">
    <div>
      <span class="eyebrow">AI Automation</span>
      <h2>Automate the Repetitive Parts of Running a Store</h2>
      <p>CartMento adds AI-powered tools to your store so you can spend less time on repetitive tasks and more time growing your business.</p>
      <ul>
        <li><span class="check">✓</span> AI chatbots that answer customer questions 24/7</li>
        <li><span class="check">✓</span> Automated order and shipping updates</li>
        <li><span class="check">✓</span> AI-assisted product descriptions and catalog management</li>
        <li><span class="check">✓</span> Smart lead capture for follow-up and sales</li>
      </ul>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary" style="margin-top:28px;">Add AI Automation to My Store</a>
    </div>
    <div class="ai-panel">
      <div class="ai-chat-line"><div class="bubble">Hi! Do you have this in size medium?</div></div>
      <div class="ai-chat-line bot"><div class="bubble">Yes — in stock. Want me to add it to your cart?</div></div>
      <div class="ai-chat-line"><div class="bubble">Where's my order #4821?</div></div>
      <div class="ai-chat-line bot"><div class="bubble">Shipped today, arriving in 2–3 days 🚚</div></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Pricing</span>
      <h2>Simple Packages for Every Stage</h2>
    </div>
    <div class="pricing-grid">
      <div class="price-card">
        <span class="tag">Starter</span>
        <h3>Starter Website Package</h3>
        <p class="desc">For small businesses that need a professional business website.</p>
        <div class="price-line">Starting from</div>
        <div class="price-note">Request Quote</div>
        <ul>
          <li><span class="check">✓</span> Professional WordPress website</li>
          <li><span class="check">✓</span> Mobile-responsive design</li>
          <li><span class="check">✓</span> Basic on-page SEO setup</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="btn btn-outline">See Full Details</a>
      </div>
      <div class="price-card featured">
        <span class="tag">Most Popular</span>
        <h3>E-commerce Launch Package</h3>
        <p class="desc">For businesses that want a complete WooCommerce online store.</p>
        <div class="price-line">Starting from</div>
        <div class="price-note">Request Quote</div>
        <ul>
          <li><span class="check">✓</span> Full WooCommerce store setup</li>
          <li><span class="check">✓</span> Payment &amp; shipping setup</li>
          <li><span class="check">✓</span> 30 days post-launch support</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="btn btn-primary">See Full Details</a>
      </div>
      <div class="price-card">
        <span class="tag">Growth</span>
        <h3>Growth &amp; Automation Package</h3>
        <p class="desc">For businesses that need AI automation, SEO, analytics, and monthly support.</p>
        <div class="price-line">Starting from</div>
        <div class="price-note">Request Quote</div>
        <ul>
          <li><span class="check">✓</span> AI chatbot + automation</li>
          <li><span class="check">✓</span> Advanced SEO setup</li>
          <li><span class="check">✓</span> Monthly technical support</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="btn btn-outline">See Full Details</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--grey">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Recent Work</span>
      <h2>A Look at the Type of Stores We Build</h2>
    </div>
    <div class="grid-3">
      <div class="case-card">
        <div class="case-thumb"></div>
        <div class="case-body">
          <span class="case-tag">WooCommerce · Fashion</span>
          <h3>Complete WooCommerce Store Build</h3>
          <p>Product catalog, payment integration, and a mobile-optimized checkout flow.</p>
        </div>
      </div>
      <div class="case-card">
        <div class="case-thumb"></div>
        <div class="case-body">
          <span class="case-tag">Magento 2 · Electronics</span>
          <h3>Frontend Customization &amp; Speed</h3>
          <p>Custom category page design and site-speed improvements on Magento 2.</p>
        </div>
      </div>
      <div class="case-card">
        <div class="case-thumb"></div>
        <div class="case-body">
          <span class="case-tag">AI Chatbot · Services</span>
          <h3>Chatbot &amp; Automation Setup</h3>
          <p>AI chatbot integration for lead capture and support automation.</p>
        </div>
      </div>
    </div>
    <div style="text-align:center; margin-top:40px;">
      <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="btn btn-outline">View Portfolio →</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="container founder">
    <div class="founder-avatar">CM</div>
    <div>
      <span class="eyebrow">Who's Behind CartMento</span>
      <h2>Built by a Developer Who Understands E-commerce</h2>
      <p>CartMento is led by a full stack developer with hands-on experience in Magento 2, WordPress, WooCommerce, and Core PHP. From checkout flow and product pages to backend customization and website maintenance, every project is handled with real technical expertise — combined with modern AI tools to work faster and smarter.</p>
      <div class="badge-row">
        <span class="badge">WordPress</span>
        <span class="badge">WooCommerce</span>
        <span class="badge">Magento 2</span>
        <span class="badge">Core PHP</span>
        <span class="badge">Frontend Development</span>
        <span class="badge">Backend Customization</span>
        <span class="badge">AI Automation</span>
      </div>
    </div>
  </div>
</section>

<section class="section section--grey">
  <div class="container" style="max-width:820px;">
    <div class="section-head center">
      <span class="eyebrow">FAQ</span>
      <h2>Common Questions</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item open">
        <button class="faq-question">What platforms do you work with?<span class="plus">+</span></button>
        <div class="faq-answer"><p>We work with WordPress, WooCommerce, and Magento 2, depending on what best fits your business needs.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Do you only build new websites, or can you fix an existing one?<span class="plus">+</span></button>
        <div class="faq-answer"><p>Both. We build new stores from scratch and also improve, redesign, or fix existing WordPress, WooCommerce, and Magento 2 websites.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Can you set up an AI chatbot for my store?<span class="plus">+</span></button>
        <div class="faq-answer"><p>Yes. We set up AI chatbots for customer support, lead capture, and automated responses on your website.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">How long does it take to build a store?<span class="plus">+</span></button>
        <div class="faq-answer"><p>Timelines depend on the size and complexity of the project. A basic website can take 1–2 weeks, while a full e-commerce store may take 3–6 weeks.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Do you provide support after the website is live?<span class="plus">+</span></button>
        <div class="faq-answer"><p>Yes. All packages include post-launch support, and we also offer monthly maintenance plans for ongoing updates and fixes.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Do you work with international clients?<span class="plus">+</span></button>
        <div class="faq-answer"><p>Yes. While we work closely with businesses in Lahore, Multan, Karachi, and Islamabad, we also take on projects from international clients.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="final-cta">
      <h2>Ready to Launch or Upgrade Your Online Store?</h2>
      <p>Get a free consultation and find out the best way forward for your business.</p>
      <div class="ctas">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-white">Get Free Consultation</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
