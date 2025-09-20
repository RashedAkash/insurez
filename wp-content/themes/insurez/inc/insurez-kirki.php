<?php

new \Kirki\Panel(
	'insurez_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'My Insurez Panel', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

function header_topbar(){



    new \Kirki\Section(
	'insurez_topbar',
	[
		'title'       => esc_html__( 'My Topbar Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'insurez_panel',
		'priority'    => 160,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'logo_setting_url',
		'label'       => esc_html__( 'Image Control (URL)', 'kirki' ),
		'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
		'section'     => 'insurez_topbar',
		'default'     => get_template_directory_uri() .'/assets/img/logo/logo.png',
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'topbar_welcome_setting',
		'label'    => esc_html__( 'Text Control', 'kirki' ),
		'section'  => 'insurez_topbar',
		'default'  => esc_html__( 'Welcome to our Insurez company', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'topbar_location_setting',
		'label'    => esc_html__( 'Text Control', 'kirki' ),
		'section'  => 'insurez_topbar',
		'default'  => esc_html__( '66 Broklyne Golden Street, USA', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'logo_link',
		'label'    => esc_html__( 'Logo Link', 'kirki' ),
		'section'  => 'insurez_topbar',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'topbar_mail_setting',
		'label'    => esc_html__( 'Text Control', 'kirki' ),
		'section'  => 'insurez_topbar',
		'default'  => esc_html__( 'needhelp@company.com', 'kirki' ),
		'priority' => 10,
	]
);
}
header_topbar();

//main header
function main_header(){



    new \Kirki\Section(
	'insurez_header',
	[
		'title'       => esc_html__( 'My Header Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'insurez_panel',
		'priority'    => 160,
	]
);



new \Kirki\Field\Text(
	[
		'settings' => 'header_call_text',
		'label'    => esc_html__( 'Text Control', 'kirki' ),
		'section'  => 'insurez_header',
		'default'  => esc_html__( 'Call Us Anytime', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_call_number',
		'label'    => esc_html__( 'Text Control', 'kirki' ),
		'section'  => 'insurez_header',
		'default'  => esc_html__( '+98 656 768 6789', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'mobile_logo_link',
		'label'    => esc_html__( 'Logo Link', 'kirki' ),
		'section'  => 'insurez_header',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'mobile_logo_setting_url',
		'label'       => esc_html__( 'Image Control (URL)', 'kirki' ),
		'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
		'section'     => 'insurez_header',
		'default'     => get_template_directory_uri() .'/assets/img/logo/logo-black.png',
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header-btn',
		'label'    => esc_html__( 'Text Control', 'kirki' ),
		'section'  => 'insurez_header',
		'default'  => esc_html__( 'Get a Quote', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'header-btn-url',
		'label'    => esc_html__( 'Text Control', 'kirki' ),
		'section'  => 'insurez_header',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);
}
main_header();



// footer
function footer_copyright(){



    new \Kirki\Section(
	'footer',
	[
		'title'       => esc_html__( 'My footer Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'insurez_panel',
		'priority'    => 160,
	]
);



new \Kirki\Field\Text(
	[
		'settings' => 'footer_copyright_setting',
		'label'    => esc_html__( 'Text Control', 'kirki' ),
		'section'  => 'footer',
		'default'  => esc_html__( '© Copyright 2023, Insurez. All Rights Reserved', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'topbar_location_setting',
		'label'    => esc_html__( 'Text Control', 'kirki' ),
		'section'  => 'insurez_topbar',
		'default'  => esc_html__( '66 Broklyne Golden Street, USA', 'kirki' ),
		'priority' => 10,
	]
);

}
footer_copyright();