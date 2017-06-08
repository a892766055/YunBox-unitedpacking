<?php get_header(); ?>

    <div class="m-ab-bn">
        <span class="u-img-pr"></span>
    </div>
<div class="kadima_header_breadcrum_title">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php global $wp;
				echo $current_url = (add_query_arg(array(),$wp->request)); ?></h1>
				<!-- BreadCrumb -->
                <?php if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?>
                <!-- BreadCrumb -->
			</div>
		</div>
	</div>	
</div>
<?php if(is_shop()||is_product_category())
{
    ?>
    <div class="kadima_header_breadcrum_title u-border-b">
        <div class="container">
            <div class="row">
                <?php
                wp_nav_menu( array(
                        'theme_location' => 'product-nav',
                        'menu_class' => 'nav navbar-nav',
                        'walker' => new kadima_nav_walker(),
                    )
                );
                ?>
            </div>
        </div>
    </div>
<?php }?>
<div class="container">
	<div class="row kadima_blog_wrapper">
	<div class="col-md-12">
	<?php woocommerce_content(); ?>
	</div>
	<?php //get_sidebar(); ?>	
	</div>
</div>	
<?php get_footer(); ?>