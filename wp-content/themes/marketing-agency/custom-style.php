<?php

	/*---------------------------First highlight color-------------------*/

	$marketing_agency_first_color = get_theme_mod('marketing_agency_first_color');

	$marketing_agency_custom_css= "";

	if($marketing_agency_first_color != false){
		$marketing_agency_custom_css .='a, .more-btn a:hover, #footer .textwidget a,#footer li a:hover,.post-main-box:hover h3 a,#sidebar ul li a:hover,.post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.post-navigation a:hover,.post-navigation a:focus, .woocommerce ul.products li.product .price,.woocommerce div.product p.price, .woocommerce div.product span.price, .toggle-nav i, .wp-block-button .wp-block-button__link:hover{';
			$marketing_agency_custom_css .='color: '.esc_html($marketing_agency_first_color).';';
		$marketing_agency_custom_css .='}';
	}

	if($marketing_agency_first_color != false){
		$marketing_agency_custom_css .='.main-navigation a:hover{';
			$marketing_agency_custom_css .='color: '.esc_html($marketing_agency_first_color).'!important;';
		$marketing_agency_custom_css .='}';
	}

	/*---------------------------Second highlight color-------------------*/

	$marketing_agency_second_color = get_theme_mod('marketing_agency_second_color');

	if($marketing_agency_second_color != false){
		$marketing_agency_custom_css .='.woocommerce span.onsale{';
			$marketing_agency_custom_css .='background-color: '.esc_html($marketing_agency_second_color).';';
		$marketing_agency_custom_css .='}';
	}

	if($marketing_agency_first_color != false || $marketing_agency_second_color != false){
		$marketing_agency_custom_css .='input[type="submit"], a.getstarted-btn, #header, .more-btn a, .inner-box:hover, #footer-2, .scrollup i, #comments input[type="submit"], #comments a.comment-reply-link, #sidebar h3, .pagination span, .pagination a, .widget_product_search button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .wp-block-button__link{
			background: linear-gradient(to right, '.esc_html($marketing_agency_first_color).', '.esc_html($marketing_agency_second_color).');
		}';
	}

	if($marketing_agency_first_color != false || $marketing_agency_second_color != false){
		$marketing_agency_custom_css .='.page-template-custom-home-page .main-navigation .current_page_item > a,.page-template-custom-home-page .main-navigation .current-menu-item > a, .page-template-custom-home-page .main-navigation .current_page_ancestor > a,.page-template-custom-home-page .main-navigation a:hover, .custom-social-icons i:hover,.top-bar i.far.fa-envelope,.top-bar i.fas.fa-phone, .main-navigation ul.sub-menu a:hover{
			background: linear-gradient('.esc_html($marketing_agency_first_color).', '.esc_html($marketing_agency_second_color).');
			-webkit-text-fill-color: transparent;
			-webkit-background-clip: text;
		}';
	}

	/*---------------------------Width Layout -------------------*/

	$marketing_agency_theme_lay = get_theme_mod( 'marketing_agency_width_option','Full Width');
    if($marketing_agency_theme_lay == 'Boxed'){
		$marketing_agency_custom_css .='body{';
			$marketing_agency_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$marketing_agency_custom_css .='}';
		$marketing_agency_custom_css .='#slider .carousel-control-prev-icon{';
			$marketing_agency_custom_css .='border-width: 25px 163px 25px 0; top: 42px;';
		$marketing_agency_custom_css .='}';
		$marketing_agency_custom_css .='#slider .carousel-control-next-icon{';
			$marketing_agency_custom_css .='border-width: 25px 0 25px 170px; top: 42px;';
		$marketing_agency_custom_css .='}';
	}else if($marketing_agency_theme_lay == 'Wide Width'){
		$marketing_agency_custom_css .='body{';
			$marketing_agency_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$marketing_agency_custom_css .='}';
	}else if($marketing_agency_theme_lay == 'Full Width'){
		$marketing_agency_custom_css .='body{';
			$marketing_agency_custom_css .='max-width: 100%;';
		$marketing_agency_custom_css .='}';
	}

	/*--------------------------- Slider Content Layout -------------------*/

	$marketing_agency_slider_image = get_theme_mod('marketing_agency_slider_image');
	if($marketing_agency_slider_image != false){
		$marketing_agency_custom_css .='#slider{';
			$marketing_agency_custom_css .='background: url('.esc_url($marketing_agency_slider_image).');';
		$marketing_agency_custom_css .='}';
	}

	$marketing_agency_theme_lay = get_theme_mod( 'marketing_agency_slider_content_option','Left');
    if($marketing_agency_theme_lay == 'Left'){
		$marketing_agency_custom_css .='#slider .carousel-caption{';
			$marketing_agency_custom_css .='text-align:left; right: 22%; left: 2%;';
		$marketing_agency_custom_css .='}';
	}else if($marketing_agency_theme_lay == 'Center'){
		$marketing_agency_custom_css .='#slider .carousel-caption{';
			$marketing_agency_custom_css .='text-align:center; right: 10%; left: 10%;';
		$marketing_agency_custom_css .='}';
	}else if($marketing_agency_theme_lay == 'Right'){
		$marketing_agency_custom_css .='#slider .carousel-caption{';
			$marketing_agency_custom_css .='text-align:right; right: 10%; left: 15%;';
		$marketing_agency_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$marketing_agency_theme_lay = get_theme_mod( 'marketing_agency_blog_layout_option','Default');
    if($marketing_agency_theme_lay == 'Default'){
		$marketing_agency_custom_css .='.post-main-box{';
			$marketing_agency_custom_css .='';
		$marketing_agency_custom_css .='}';
	}else if($marketing_agency_theme_lay == 'Center'){
		$marketing_agency_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p{';
			$marketing_agency_custom_css .='text-align:center;';
		$marketing_agency_custom_css .='}';
		$marketing_agency_custom_css .='.post-info{';
			$marketing_agency_custom_css .='margin-top:10px;';
		$marketing_agency_custom_css .='}';
	}else if($marketing_agency_theme_lay == 'Left'){
		$marketing_agency_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, #our-services p{';
			$marketing_agency_custom_css .='text-align:Left;';
		$marketing_agency_custom_css .='}';
		$marketing_agency_custom_css .='.post-main-box h2{';
			$marketing_agency_custom_css .='margin-top:10px;';
		$marketing_agency_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$marketing_agency_resp_slider = get_theme_mod( 'marketing_agency_resp_slider_hide_show',false);
    if($marketing_agency_resp_slider == true){
    	$marketing_agency_custom_css .='@media screen and (max-width:575px) {';
		$marketing_agency_custom_css .='#slider{';
			$marketing_agency_custom_css .='display:block;';
		$marketing_agency_custom_css .='} }';
	}else if($marketing_agency_resp_slider == false){
		$marketing_agency_custom_css .='@media screen and (max-width:575px) {';
		$marketing_agency_custom_css .='#slider{';
			$marketing_agency_custom_css .='display:none;';
		$marketing_agency_custom_css .='} }';
	}

	$marketing_agency_resp_metabox = get_theme_mod( 'marketing_agency_metabox_hide_show',true);
    if($marketing_agency_resp_metabox == true){
    	$marketing_agency_custom_css .='@media screen and (max-width:575px) {';
		$marketing_agency_custom_css .='.post-info{';
			$marketing_agency_custom_css .='display:block;';
		$marketing_agency_custom_css .='} }';
	}else if($marketing_agency_resp_metabox == false){
		$marketing_agency_custom_css .='@media screen and (max-width:575px) {';
		$marketing_agency_custom_css .='.post-info{';
			$marketing_agency_custom_css .='display:none;';
		$marketing_agency_custom_css .='} }';
	}

	$marketing_agency_resp_sidebar = get_theme_mod( 'marketing_agency_sidebar_hide_show',true);
    if($marketing_agency_resp_sidebar == true){
    	$marketing_agency_custom_css .='@media screen and (max-width:575px) {';
		$marketing_agency_custom_css .='#sidebar{';
			$marketing_agency_custom_css .='display:block;';
		$marketing_agency_custom_css .='} }';
	}else if($marketing_agency_resp_sidebar == false){
		$marketing_agency_custom_css .='@media screen and (max-width:575px) {';
		$marketing_agency_custom_css .='#sidebar{';
			$marketing_agency_custom_css .='display:none;';
		$marketing_agency_custom_css .='} }';
	}

	$marketing_agency_resp_scroll_top = get_theme_mod( 'marketing_agency_resp_scroll_top_hide_show',false);
    if($marketing_agency_resp_scroll_top == true){
    	$marketing_agency_custom_css .='@media screen and (max-width:575px) {';
		$marketing_agency_custom_css .='.scrollup i{';
			$marketing_agency_custom_css .='display:block;';
		$marketing_agency_custom_css .='} }';
	}else if($marketing_agency_resp_scroll_top == false){
		$marketing_agency_custom_css .='@media screen and (max-width:575px) {';
		$marketing_agency_custom_css .='.scrollup i{';
			$marketing_agency_custom_css .='display:none !important;';
		$marketing_agency_custom_css .='} }';
	}

	/*---------------- Button Settings ------------------*/

	$marketing_agency_button_border_radius = get_theme_mod('marketing_agency_button_border_radius');
	if($marketing_agency_button_border_radius != false){
		$marketing_agency_custom_css .='.post-main-box .more-btn a{';
			$marketing_agency_custom_css .='border-radius: '.esc_attr($marketing_agency_button_border_radius).'px;';
		$marketing_agency_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$marketing_agency_copyright_alingment = get_theme_mod('marketing_agency_copyright_alingment');
	if($marketing_agency_copyright_alingment != false){
		$marketing_agency_custom_css .='.copyright p{';
			$marketing_agency_custom_css .='text-align: '.esc_attr($marketing_agency_copyright_alingment).';';
		$marketing_agency_custom_css .='}';
	}