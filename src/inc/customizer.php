<?php
/**
 *
 * Theme Customizer.
 *
 */
function ecdg_customize_register( $wp_customize ) {

	/**
	 * google adsense
	 */
	$wp_customize->add_section( 'google_adsense_settings_section', array(
		'title'    => 'Google Adsense Settings',
		'priority' => 200,
	));
	// bool
	$wp_customize->add_setting( 'ecdg_theme_options[adBoolean]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_ad_boolean', array(
		'settings' => 'ecdg_theme_options[adBoolean]',
		'label'    => 'サイトへ広告を表示する',
		'section'  => 'google_adsense_settings_section',
		'type'     => 'checkbox',
	));
	// class
	$wp_customize->add_setting( 'ecdg_theme_options[adClass]', array(
		'default'  => 'adsbygoogle',
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_ad_class', array(
		'settings' => 'ecdg_theme_options[adClass]',
		'label'    => 'class',
		'section'  => 'google_adsense_settings_section',
		'type'     => 'text',
	));
	// style
	$wp_customize->add_setting( 'ecdg_theme_options[adStyle]', array(
		'default'  => 'display:block',
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_ad_style', array(
		'settings' => 'ecdg_theme_options[adStyle]',
		'label'    => 'style',
		'section'  => 'google_adsense_settings_section',
		'type'     => 'text',
	));
	// data-ad-client
	$wp_customize->add_setting( 'ecdg_theme_options[adDataAdClient]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_ad_data_ad_client', array(
		'settings' => 'ecdg_theme_options[adDataAdClient]',
		'label'    => 'data-ad-client',
		'section'  => 'google_adsense_settings_section',
		'type'     => 'text',
	));
	// data-ad-slot
	$wp_customize->add_setting( 'ecdg_theme_options[adDataAdSlot]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_ad_data_ad_slot', array(
		'settings' => 'ecdg_theme_options[adDataAdSlot]',
		'label'    => 'data-ad-slot',
		'section'  => 'google_adsense_settings_section',
		'type'     => 'text',
	));
	// data-ad-format
	$wp_customize->add_setting( 'ecdg_theme_options[adDataAdFormat]', array(
		'default'  => 'auto',
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_ad_data_ad_format', array(
		'settings' => 'ecdg_theme_options[adDataAdFormat]',
		'label'    => 'data-ad-format',
		'section'  => 'google_adsense_settings_section',
		'type'     => 'text',
	));


	/**
	 * google analytics
	 */
	$wp_customize->add_section( 'google_analytics_settings_section', array(
		'title'    => 'Google Analytics Settings',
		'priority' => 200,
	));
	// analytics bool
	$wp_customize->add_setting( 'ecdg_theme_options[gaBoolean]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_ga_boolean', array(
		'settings' => 'ecdg_theme_options[gaBoolean]',
		'label'    => 'アナリティクスを設置する',
		'section'  => 'google_analytics_settings_section',
		'type'     => 'checkbox',
	));
	// analytics UA
	$wp_customize->add_setting( 'ecdg_theme_options[gaUA]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_ga_ua', array(
		'settings' => 'ecdg_theme_options[gaUA]',
		'label'    => 'UA-',
		'section'  => 'google_analytics_settings_section',
		'type'     => 'text',
	));


	/**
	 * aff
	 */
	$wp_customize->add_section( 'aff_settings_section', array(
		'title'    => 'Affiliate Settings',
		'priority' => 200,
	));
	// aff bool
	$wp_customize->add_setting( 'ecdg_theme_options[affBoolean]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_aff_boolean', array(
		'settings' => 'ecdg_theme_options[affBoolean]',
		'label'    => 'Affiliateを設置する',
		'section'  => 'aff_settings_section',
		'type'     => 'checkbox',
	));
	// aff header
	$wp_customize->add_setting( 'ecdg_theme_options[affHeader]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_aff_header', array(
		'settings' => 'ecdg_theme_options[affHeader]',
		'label'    => 'header aff tags',
		'section'  => 'aff_settings_section',
		'type'     => 'textarea',
	));
	// aff footer
	$wp_customize->add_setting( 'ecdg_theme_options[affFooter]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_aff_footer', array(
		'settings' => 'ecdg_theme_options[affFooter]',
		'label'    => 'footer aff tags',
		'section'  => 'aff_settings_section',
		'type'     => 'textarea',
	));

	/**
	 * ogp
	 */
	$wp_customize->add_section( 'ogp_settings_section', array(
		'title'    => 'OGP Settings',
		'priority' => 200,
	));
	// facebook bool
	$wp_customize->add_setting( 'ecdg_theme_options[fbBoolean]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_fb_boolean', array(
		'settings' => 'ecdg_theme_options[fbBoolean]',
		'label'    => 'facebookのOGPを設置する',
		'section'  => 'ogp_settings_section',
		'type'     => 'checkbox',
	));
	// facebook admins
	$wp_customize->add_setting( 'ecdg_theme_options[fbAdmins]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_fb_admins', array(
		'settings' => 'ecdg_theme_options[fbAdmins]',
		'label'    => 'fb:admins',
		'section'  => 'ogp_settings_section',
		'type'     => 'text',
	));
	// twitter bool
	$wp_customize->add_setting( 'ecdg_theme_options[twBoolean]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_tw_boolean', array(
		'settings' => 'ecdg_theme_options[twBoolean]',
		'label'    => 'twitterのOGPを設置する',
		'section'  => 'ogp_settings_section',
		'type'     => 'checkbox',
	));
	// twitter site account
	$wp_customize->add_setting( 'ecdg_theme_options[twSite]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_tw_site', array(
		'settings' => 'ecdg_theme_options[twSite]',
		'label'    => 'twitter:site',
		'section'  => 'ogp_settings_section',
		'type'     => 'text',
	));
	// twitter creator account
	$wp_customize->add_setting( 'ecdg_theme_options[twCreator]', array(
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_tw_creator', array(
		'settings' => 'ecdg_theme_options[twCreator]',
		'label'    => 'twitter:creator',
		'section'  => 'ogp_settings_section',
		'type'     => 'text',
	));
	// twitter creator account
	$wp_customize->add_setting( 'ecdg_theme_options[twCard]', array(
		'default'  => 'summary_large_image',
		'type'     => 'option',
	));
	$wp_customize->add_control( 'ecdg_theme_options_tw_card', array(
		'settings' => 'ecdg_theme_options[twCard]',
		'label'    => 'twitter:card',
		'section'  => 'ogp_settings_section',
		'type'     => 'text',
	));

}
add_action( 'customize_register', 'ecdg_customize_register' );
