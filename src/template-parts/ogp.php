<?php
/**
 *
 * ogp
 *
 */
$options = get_option('ecdg_theme_options'); ?>
  <!-- ogp -->
  <meta property="og:title" content="<?php $title = wp_get_document_title(); echo $title; ?>">
  <meta property="og:type" content="<?php if( is_home() ) { echo 'website'; } else { echo 'article'; } ?>">
  <meta property="og:url" content="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
  <meta property="og:image" content="<?php if ( is_single() && wp_get_attachment_url(get_post_thumbnail_id()) != '' ) { echo wp_get_attachment_url(get_post_thumbnail_id()); } elseif ( is_single() && wp_get_attachment_url(get_post_thumbnail_id()) == '' ) { echo get_bloginfo('template_url').'/assets/images/ecdg-no-images.jpg'; } else { echo get_bloginfo('template_url').'/assets/images/ecdg-eyecatch-default.png';} ?>">
  <meta property="og:site_name" content="カラーミーショップデザインギャラリー">
  <meta property="og:description" content="<?php my_description(); ?>">
  <?php if ( $options['fbBoolean'] ) { echo '<meta property="fb:admins" content="' . esc_html($options['fbAdmins']) . '">'; }; ?>

<?php if ( $options['twBoolean'] ) : ?>
  <?php if ( $options['twSite'] !== "" ) { echo '<meta name="twitter:site" content="' . esc_html($options['twSite']) . '">'; }; ?>

  <?php if ( $options['twCreator'] !== "" ) { echo '<meta name="twitter:creator" content="' . esc_html($options['twCreator']) . '">'; }; ?>

  <?php if ( $options['twCard'] !== "" ) { echo '<meta name="twitter:card" content="' . esc_html($options['twCard']) . '">'; }; ?>

<?php endif; ?>