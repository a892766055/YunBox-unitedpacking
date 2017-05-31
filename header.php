<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>" />
	<?php $theme_options = kadima_get_options(); ?>
	<?php if($theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($theme_options['upload_image_favicon']); ?>" />
	<?php } ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div>
	<div class="header_section" >
		<div class="container" >
			<div class="row ">
				<div class="col-md-6 col-sm-12" >
					<div class="logo">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if($theme_options['upload_image_logo']){ ?>
						<img class="img-responsive" src="<?php echo $theme_options['upload_image_logo']; ?>" style="height:<?php if($theme_options['height']!='') { echo $theme_options['height']; }  else { "80"; } ?>px; width:<?php if($theme_options['width']!='') { echo $theme_options['width']; }  else { "200"; } ?>px;" />
						<?php } else {
							echo get_bloginfo('name');
						} ?>
					</a>
					<p><?php bloginfo( 'description' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="navigation_menu "  data-spy="affix" data-offset-top="95" id="kadima_nav_top">
		<div class="container navbar-container" >
			<nav class="navbar navbar-default " role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					  <span class="sr-only"><?php _e('Toggle navigation','kadima');?></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
				</div>

				<div id="menu" class="collapse navbar-collapse ">
                    <div class="u-logo">
                        <img src="http://localhost/wrd-lxh/wp-content/themes/YunBox-unitedpacking/images/logo.png" >
                </div>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class' => 'nav navbar-nav',
							'walker' => new kadima_nav_walker(),
							)
						);
					?>
					<div id="google_translate_element"></div>
				</div>
			</nav>
		</div>
	</div>
