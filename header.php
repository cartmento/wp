<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="container">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        CartMento<span class="dot">.</span>
      <?php endif; ?>
    </a>

    <?php
    if ( has_nav_menu( 'primary' ) ) {
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'container'      => 'div',
        'container_class'=> 'nav-links',
        'menu_class'     => '',
        'depth'          => 1,
      ) );
    } else {
      echo '<div class="nav-links">';
      cartmento_fallback_menu();
      echo '</div>';
    }
    ?>

    <div class="header-actions">
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-sm">Get Free Consultation</a>
      <button class="menu-toggle" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </div>

  <?php
  if ( has_nav_menu( 'primary' ) ) {
    wp_nav_menu( array(
      'theme_location' => 'primary',
      'container'      => 'div',
      'container_class'=> 'mobile-nav',
      'menu_class'     => '',
      'depth'          => 1,
    ) );
  } else {
    echo '<div class="mobile-nav">';
    cartmento_fallback_menu();
    echo '</div>';
  }
  ?>
</header>
