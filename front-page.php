<?php
get_header();
$theme_options = kadima_get_options();
$theme_options['_frontpage'];
if ($theme_options['_frontpage']=="1" && is_front_page())
{
	get_template_part('home','slideshow');
	if($theme_options['service_home'] == "1") {
	get_template_part('home','services');
	}

	if($theme_options['portfolio_home'] == "1") {
	get_template_part('home','portfolio');
	}
	if($theme_options['show_blog'] == "1") {
	get_template_part('home','blog');
	}
	if($theme_options['fc_home'] == "1") {
	get_template_part('footer','callout');
	}
	get_footer();
}
else
{
	if(is_page()){
		get_template_part('page');
	}else{
		get_template_part('index');
	}
}
?>
