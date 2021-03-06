<?php


// Margins goroup for desktop

array(
	'label' => __( 'Margin', 'live-composer-page-builder' ),
	'id' => 'css_margin_group',
	'type' => 'group',
	'action' => 'open',
	'section' => 'styling',
),
	array(
		'label' => __( 'Top', 'live-composer-page-builder' ),
		'id' => 'css_margin_top',
		'std' => '0',
		'type' => 'slider',
		'refresh_on_change' => false,
		'affect_on_change_el' => '.dslc-image',
		'affect_on_change_rule' => 'margin-top',
		'section' => 'styling',
		'ext' => 'px',
		'min' => -250,
		'max' => 250,
	),
	array(
		'label' => __( 'Right', 'live-composer-page-builder' ),
		'id' => 'css_margin_right',
		'std' => '0',
		'type' => 'slider',
		'refresh_on_change' => false,
		'affect_on_change_el' => '.dslc-image',
		'affect_on_change_rule' => 'margin-right',
		'section' => 'styling',
		'ext' => 'px',
		'min' => -250,
		'max' => 250,
	),
	array(
		'label' => __( 'Bottom', 'live-composer-page-builder' ),
		'id' => 'css_margin_bottom',
		'std' => '0',
		'type' => 'slider',
		'refresh_on_change' => false,
		'affect_on_change_el' => '.dslc-image',
		'affect_on_change_rule' => 'margin-bottom',
		'section' => 'styling',
		'ext' => 'px',
		'min' => -250,
		'max' => 250,
	),
	array(
		'label' => __( 'Left', 'live-composer-page-builder' ),
		'id' => 'css_margin_left',
		'std' => '0',
		'type' => 'slider',
		'refresh_on_change' => false,
		'affect_on_change_el' => '.dslc-image',
		'affect_on_change_rule' => 'margin-left',
		'section' => 'styling',
		'ext' => 'px',
		'min' => -250,
		'max' => 250,
	),
array(
	'id' => 'css_margin_group',
	'type' => 'group',
	'action' => 'close',
	'section' => 'styling',
),


// Margins group for tablets

array(
	'label' => __( 'Margin', 'live-composer-page-builder' ),
	'id' => 'css_res_t_margin_group',
	'type' => 'group',
	'action' => 'open',
	'section' => 'responsive',
	'tab' => __( 'Tablet', 'live-composer-page-builder' ),
),
	array(
		'label' => __( 'Top', 'live-composer-page-builder' ),
		'id' => 'css_res_t_margin_top',
		'std' => '0',
		'type' => 'slider',
		'refresh_on_change' => false,
		'affect_on_change_el' => '.dslc-image',
		'affect_on_change_rule' => 'margin-top',
		'section' => 'responsive',
		'tab' => __( 'Tablet', 'live-composer-page-builder' ),
		'ext' => 'px',
		'min' => -250,
		'max' => 250,
	),
	array(
		'label' => __( 'Right', 'live-composer-page-builder' ),
		'id' => 'css_res_t_margin_right',
		'std' => '0',
		'type' => 'slider',
		'refresh_on_change' => false,
		'affect_on_change_el' => '.dslc-image',
		'affect_on_change_rule' => 'margin-right',
		'section' => 'responsive',
		'tab' => __( 'Tablet', 'live-composer-page-builder' ),
		'ext' => 'px',
		'min' => -250,
		'max' => 250,
	),
	array(
		'label' => __( 'Bottom', 'live-composer-page-builder' ),
		'id' => 'css_res_t_margin_bottom',
		'std' => '0',
		'type' => 'slider',
		'refresh_on_change' => false,
		'affect_on_change_el' => '.dslc-image',
		'affect_on_change_rule' => 'margin-bottom',
		'section' => 'responsive',
		'tab' => __( 'Tablet', 'live-composer-page-builder' ),
		'ext' => 'px',
		'min' => -250,
		'max' => 250,
	),
	array(
		'label' => __( 'Left', 'live-composer-page-builder' ),
		'id' => 'css_res_t_margin_left',
		'std' => '0',
		'type' => 'slider',
		'refresh_on_change' => false,
		'affect_on_change_el' => '.dslc-image',
		'affect_on_change_rule' => 'margin-left',
		'section' => 'responsive',
		'tab' => __( 'Tablet', 'live-composer-page-builder' ),
		'ext' => 'px',
		'min' => -250,
		'max' => 250,
	),
array(
	'id' => 'css_res_t_margin_group',
	'type' => 'group',
	'action' => 'close',
	'section' => 'responsive',
	'tab' => __( 'Tablet', 'live-composer-page-builder' ),
),

// Margins group for phone

array(
	'label' => __( 'Margin', 'live-composer-page-builder' ),
	'id' => 'css_res_p_margin_group',
	'type' => 'group',
	'action' => 'open',
	'section' => 'responsive',
	'tab' => __( 'Phone', 'live-composer-page-builder' ),
),
	array(
		'label' => __( 'Top', 'live-composer-page-builder' ),
		'id' => 'css_res_p_margin_top',
		'std' => '0',
		'type' => 'slider',
		'refresh_on_change' => false,
		'affect_on_change_el' => '.dslc-image',
		'affect_on_change_rule' => 'margin-top',
		'section' => 'responsive',
		'tab' => __( 'Phone', 'live-composer-page-builder' ),
		'ext' => 'px',
		'min' => -250,
		'max' => 250,
	),
	array(
		'label' => __( 'Right', 'live-composer-page-builder' ),
		'id' => 'css_res_p_margin_right',
		'std' => '0',
		'type' => 'slider',
		'refresh_on_change' => false,
		'affect_on_change_el' => '.dslc-image',
		'affect_on_change_rule' => 'margin-right',
		'section' => 'responsive',
		'tab' => __( 'Phone', 'live-composer-page-builder' ),
		'ext' => 'px',
		'min' => -250,
		'max' => 250,
	),
	array(
		'label' => __( 'Bottom', 'live-composer-page-builder' ),
		'id' => 'css_res_p_margin_bottom',
		'std' => '0',
		'type' => 'slider',
		'refresh_on_change' => false,
		'affect_on_change_el' => '.dslc-image',
		'affect_on_change_rule' => 'margin-bottom',
		'section' => 'responsive',
		'tab' => __( 'Phone', 'live-composer-page-builder' ),
		'ext' => 'px',
		'min' => -250,
		'max' => 250,
	),
	array(
		'label' => __( 'Left', 'live-composer-page-builder' ),
		'id' => 'css_res_p_margin_left',
		'std' => '0',
		'type' => 'slider',
		'refresh_on_change' => false,
		'affect_on_change_el' => '.dslc-image',
		'affect_on_change_rule' => 'margin-left',
		'section' => 'responsive',
		'tab' => __( 'Phone', 'live-composer-page-builder' ),
		'ext' => 'px',
		'min' => -250,
		'max' => 250,
	),
array(
	'id' => 'css_res_p_margin_group',
	'type' => 'group',
	'action' => 'close',
	'section' => 'responsive',
	'tab' => __( 'Phone', 'live-composer-page-builder' ),
),