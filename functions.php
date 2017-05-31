<?php /* Theme Name	: Kadima */
	define('WL_TEMPLATE_DIR_URI', get_template_directory_uri());
	define('WL_TEMPLATE_DIR', get_template_directory());
	define('WL_TEMPLATE_DIR_CORE' , WL_TEMPLATE_DIR . '/core');
	require( WL_TEMPLATE_DIR_CORE . '/menu/menu_nav_walker.php' );
	function kadima_scripts() {
        wp_enqueue_style('bootstrap', '//statics.yunclever.com/bootstrap/3.3.7/css/bootstrap.min.css');
        wp_enqueue_style('animations', '//statics.yunclever.com/animate/3.5.1/animate.css');
        wp_enqueue_style('sui', '//g.alicdn.com/sj/dpl/1.5.1/css/sui.min.css');
        //wp_enqueue_style('theme-animtae', get_template_directory_uri() . '/css/theme-animtae.css');
        wp_enqueue_style('font-awesome', '//statics.yunclever.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('video-js-css', '//statics.yunclever.com/videojs/5.17.0/video-js.min.css');
        wp_enqueue_style('font-family', get_template_directory_uri() . '/css/font-family.css');
        wp_enqueue_style('default', get_template_directory_uri() . '/css/default.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('index', get_template_directory_uri() . '/indexs.css');
        wp_enqueue_script('bootstrap-js', '//statics.yunclever.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'));
        wp_enqueue_script('video-js', '//statics.yunclever.com/videojs/5.17.0/video.min.js', array('jquery'));
//        wp_enqueue_script('sui', '//g.alicdn.com/sj/dpl/1.5.1/js/sui.min.js', array('jquery'));
//        wp_enqueue_script('mock', '//mockjs.com/dist/mock.js', array('jquery'));
        wp_enqueue_script('logjs', '//statics.yunclever.com/log/0.3.0/log.min.js', array('jquery'));
        wp_enqueue_script('kadima-theme-script', get_template_directory_uri() .'/js/kadima_theme_script.js', array('jquery'));
        if(is_front_page()){
            wp_enqueue_script('jquery.carouFredSel', '//cdn.bootcss.com/jquery.caroufredsel/6.2.1/jquery.carouFredSel.packed.js');
            wp_enqueue_script('photobox-js', '//cdn.bootcss.com/photobox/1.9.9/photobox/jquery.photobox.min.js');
            wp_enqueue_style('photobox', '//cdn.bootcss.com/photobox/1.9.9/photobox/photobox.min.css');
            wp_enqueue_script('waypoints', '//cdn.bootcss.com/waypoints/4.0.1/jquery.waypoints.min.js','','',true);
            wp_enqueue_script('kadima-footer-script', get_template_directory_uri() .'/js/kadima-footer-script.js','','',true);
        }
    }
	add_action('wp_enqueue_scripts', 'kadima_scripts');
	//require( WL_TEMPLATE_DIR_CORE . '/comment-function.php' );
	require(dirname(__FILE__).'/customizer.php');
	function get_client_language(){ // 获取访问用户的语言
		if(isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])){
			preg_match("/([^,;]*)/", $_SERVER["HTTP_ACCEPT_LANGUAGE"], $array_languages);
			return str_replace( "_", "-", strtolower( $array_languages[0] ) );
		}
		return 'xx';
	}
	function kadima_default_settings() {
	    $count12 = array('One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'TEN', 'ELEVEN', 'TWELVE');
    	$Image_silde =  esc_url(get_template_directory_uri() .'/images/placeholder.jpg');
    	$Image_portfolio = esc_url(get_template_directory_uri() .'/images/placeholder.jpg');
        $wl_theme_options = array(
			'upload_image_logo'=>'',
			'height'=>'55',
			'width'=>'55',
			'_frontpage' => '1',
			'blog_count'=>'3',
			'upload_image_favicon'=>'',
			'custom_css'=>'',
			'fc_home'=>'1',
			'fc_title' => __('', 'kadima' ),
			'fc_btn_txt' => __('', 'kadima' ),
			'fc_btn_link' =>'',
			'fc_icon' => 'fa fa-thumbs-up',
			'header_social_media_in_enabled'=>'1',
			'footer_section_social_media_enbled'=>'1',
			'twitter_link' =>"",
			'fb_link' =>"",
			'linkedin_link' =>"",
			'youtube_link' =>"",
			'instagram' =>"",
			'gplus' =>"",
			'email_id' => '',
			'phone_no' => '',
			'footer_customizations' => __('', 'kadima' ),
			'info_copyright' => __('', 'kadima' ),
			'info_tel' => __('', 'kadima' ),
			'info_fax' => __('', 'kadima' ),
			'info_mail'=> __('', 'kadima' ),
			'info_support'=> __('<a href="https://www.yunclever.com" target="_blank">YunClever</a>', 'kadima' ),
			'service_home'=>'1',
			'home_service_heading' => __('', 'kadima' ),
			'portfolio_home'=>'0',
			'port_heading' => __('', 'kadima' ),
			'show_blog' => '0',
			'show_about' => '0',
			'about_title' => __('', 'kadima' ),
			'about_description' => __('', 'kadima' ),
			'blog_title' => __('', 'kadima' ),
			'service_heading' => __('', 'kadima' ),
		);
		for($i=1; $i<=12; $i++){
			$theme_options['slide_image_'.$i] = __('', 'kadima' );
			$theme_options['slide_title_'.$i] = __('', 'kadima' );
			$theme_options['slide_desc_'.$i] = __('', 'kadima' );
			$theme_options['slide_btn_text_'.$i] = __('', 'kadima' );
			$theme_options['slide_btn_link_'.$i] = __('', 'kadima' );
			$theme_options['service_icons_'.$i] = __('', 'kadima' );
			$theme_options['service_img_'.$i] = __('', 'kadima' );
			$theme_options['service_title_'.$i] = __('', 'kadima' );
			$theme_options['service_text_'.$i] = __('', 'kadima' );
			$theme_options['service_link_'.$i] = __('', 'kadima' );
			$theme_options['custom_home_'.$i] = __('0', 'kadima' );
			$theme_options['custom_desciption_'.$i] = __('', 'kadima' );
			$theme_options['custom_title_'.$i] = __('', 'kadima' );
			$theme_options['port_img_'.$i] = __('', 'kadima' );
			$theme_options['port_title_'.$i] = __('', 'kadima' );
			$theme_options['port_description_'.$i] = __('', 'kadima' );
			$theme_options['port_link_'.$i] = __('', 'kadima' );
			$theme_options['about_slide_img_'.$i] = __('', 'kadima' );
			$theme_options['about_slide_title_'.$i] = __('', 'kadima' );
			$theme_options['about_slide_desc_'.$i] = __('', 'kadima' );
			$theme_options['about_slide_link_'.$i] = __('', 'kadima' );
			for($ci=1; $ci<=5; $ci++){
				$theme_options['custom_icons_'.$ci.'_'.$i] = __('', 'kadima' );
				$theme_options['custom_img_'.$ci.'_'.$i] = __('', 'kadima' );
				$theme_options['custom_title_'.$ci.'_'.$i] = __('', 'kadima' );
				$theme_options['custom_text_'.$ci.'_'.$i] = __('', 'kadima' );
				$theme_options['custom_link_'.$ci.'_'.$i] = __('', 'kadima' );
			}
		}
		return apply_filters( 'kadima_options', $wl_theme_options );
    }
	function kadima_get_options() { // Options API
        return wp_parse_args(
            get_option( 'kadima_options', array() ),
            kadima_default_settings()
        );
	}
	add_action( 'after_setup_theme', 'kadima_head_setup' );
	function kadima_head_setup() {
		global $content_width;
		//content width
		if ( ! isset( $content_width ) ) $content_width = 550; //px
		add_image_size('home_post_thumb',340,210,true);
		add_image_size('wl_page_thumb',730,350,true);
		add_image_size('blog_2c_thumb',570,350,true);
		add_theme_support( 'title-tag' );
		load_theme_textdomain( 'kadima', WL_TEMPLATE_DIR_CORE . '/lang' );
		add_theme_support( 'post-thumbnails' );
		//set_post_thumbnail_size( 160 );
		register_nav_menu( 'primary', __( 'Primary Menu', 'kadima' ) );
		$args = array('default-color' => '000000',);
		add_theme_support( 'custom-background', $args);
		add_theme_support( 'automatic-feed-links');
		add_theme_support( 'woocommerce' );
        add_editor_style('css/style.css');
//        add_editor_style('css/sui.css');
        add_editor_style('css/indexs.css');
		require( WL_TEMPLATE_DIR . '/options-reset.php'); //Reset Theme Options Here
		if (!isset($_COOKIE['yc_visit_cookie'])) {
			setcookie('yc_visit_cookie', 1, time()+1209600, COOKIEPATH, COOKIE_DOMAIN, false);
		}
	}
	// Read more tag to formatting in blog page
	function kadima_content_more($more) {
	   return '<div class="blog-post-details-item"><a class="kadima_blog_read_btn" href="'.get_permalink().'"><i class="fa fa-plus-circle"></i>"'.__('Read More', 'kadima' ).'"</a></div>';
	}
	add_filter( 'the_content_more_link', 'kadima_content_more' );
	function kadima_excerpt_more($more) { // Replaces the excerpt "more" text by a link
       return '';
	}
	add_filter('excerpt_more', 'kadima_excerpt_more');
	add_action( 'widgets_init', 'kadima_widgets_init'); // widget area
	function kadima_widgets_init() {
    	/*sidebar*/
		register_sidebar( array(
			'name' => __( 'Sidebar', 'kadima' ),
			'id' => 'sidebar-primary',
			'description' => __( 'The primary widget area', 'kadima' ),
			'before_widget' => '<div class="kadima_sidebar_widget">',
			'after_widget' => '</div>',
			'before_title' => '<div class="kadima_sidebar_widget_title"><h2>',
			'after_title' => '</h2></div>'
		) );
    	register_sidebar( array(
    		'name' => __( 'Footer Widget Area', 'kadima' ),
    		'id' => 'footer-widget-area',
    		'description' => __( 'footer widget area', 'kadima' ),
    		'before_widget' => '<div class="col-md-4 col-sm-12 kadima_footer_widget_column">',
    		'after_widget' => '</div>',
    		'before_title' => '<h3>',
    		'after_title' => '</h3>',
    	) );
	}
	function kadima_breadcrumbs() { // 面包屑导航
        $delimiter = '';
        $home = __('Home', 'kadima' ); // text for the 'Home' link
        $before = '<li>'; // tag before the current crumb
        $after = '</li>'; // tag after the current crumb
        echo '<ul class="breadcrumb">';
        global $post;
        $homeLink = home_url();
        echo '<li><a href="' . $homeLink . '">' . $home . '</a></li>' . $delimiter . ' ';
        if (is_category()) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0)
                echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
            echo $before . ' _e("Archive by category","kadima") "' . single_cat_title('', false) . '"' . $after;
        } elseif (is_day()) {
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
            echo '<li><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
                echo $before . get_the_title() . $after;
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                //echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                echo $before . get_the_title() . $after;
            }

        } elseif (!is_single() && !is_page() && get_post_type() != 'post') {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif (is_page() && !$post->post_parent) {
            echo $before . get_the_title() . $after;
        } elseif (is_page() && $post->post_parent) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb)
                echo $crumb . ' ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif (is_search()) {
            echo $before . _e("Search results for","kadima")  . get_search_query() . '"' . $after;

        } elseif (is_tag()) {
    		echo $before . _e('Tag','kadima') . single_tag_title('', false) . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . _e("Articles posted by","kadima") . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . _e("Error 404","kadima") . $after;
        }
        echo '</ul>';
	}
	function kadima_pagination($pages = '', $range = 2) { //分页
        $showitems = ($range * 2)+1;
        global $paged;
        if(empty($paged)) $paged = 1;
        if($pages == '')
        {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if(!$pages)
            {
                $pages = 1;
            }
        }
        if(1 != $pages)
        {
            echo "<div class='kadima_blog_pagination'><div class='kadima_blog_pagi'>";
            if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
            if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
            for ($i=1; $i <= $pages; $i++)
            {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                {
                    echo ($paged == $i)? "<a class='active'>".$i."</a>":"<a href='".get_pagenum_link($i)."'>".$i."</a>";
                }
            }
            if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
            if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
            echo "</div></div>";
        }
    }
	function kadima_author_profile( $contactmethods ) { // Add Author Links
    	$contactmethods['youtube_profile'] = __('Youtube Profile URL','kadima');
    	$contactmethods['twitter_profile'] = __('Twitter Profile URL','kadima');
    	$contactmethods['facebook_profile'] = __('Facebook Profile URL','kadima');
    	$contactmethods['linkedin_profile'] = __('Linkedin Profile URL','kadima');
    	return $contactmethods;
	}
	add_filter( 'user_contactmethods', 'kadima_author_profile', 10, 1);
	add_filter('get_avatar','kadima_gravatar_class'); // Add Class Gravtar
	function kadima_gravatar_class($class) {
        $class = str_replace("class='avatar", "class='author_detail_img", $class);
        return $class;
	}
	/* Navigation for Author, Category , Tag , Archive */
	function kadima_navigation() { ?>
        <div class="kadima_blog_pagination">
            <div class="kadima_blog_pagi">
                <?php posts_nav_link(); ?>
            </div>
	    </div>
	<?php
    }
	/* Navigation for Single */
	function kadima_navigation_posts() { ?>
    	<div class="navigation_en">
        	<nav id="wblizar_nav">
            	<span class="nav-previous">
            	       <?php previous_post_link('&laquo; %link'); ?>
            	</span>
            	<span class="nav-next">
            	       <?php next_post_link('%link &raquo;'); ?>
            	</span>
        	</nav>
    	</div>
    <?php
	}
    // Custom WP
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	function smilies_reset() {
		global $wpsmiliestrans, $wp_smiliessearch;
		// don't bother setting up smilies if they are disabled
		if ( !get_option( 'use_smilies' ) )
		    return;
		$wpsmiliestrans = array(
		    ':mrgreen:' => 'icon_mrgreen.gif',
		    ':neutral:' => 'icon_neutral.gif',
		    ':twisted:' => 'icon_twisted.gif',
		      ':arrow:' => 'icon_arrow.gif',
		      ':shock:' => 'icon_eek.gif',
		      ':smile:' => 'icon_smile.gif',
		        ':???:' => 'icon_confused.gif',
		       ':cool:' => 'icon_cool.gif',
		       ':evil:' => 'icon_evil.gif',
		       ':grin:' => 'icon_biggrin.gif',
		       ':idea:' => 'icon_idea.gif',
		       ':oops:' => 'icon_redface.gif',
		       ':razz:' => 'icon_razz.gif',
		       ':roll:' => 'icon_rolleyes.gif',
		       ':wink:' => 'icon_wink.gif',
		        ':cry:' => 'icon_cry.gif',
		        ':eek:' => 'icon_surprised.gif',
		        ':lol:' => 'icon_lol.gif',
		        ':mad:' => 'icon_mad.gif',
		        ':sad:' => 'icon_sad.gif',
		          '8-)' => 'icon_cool.gif',
		          '8-O' => 'icon_eek.gif',
		          ':-(' => 'icon_sad.gif',
		          ':-)' => 'icon_smile.gif',
		          ':-?' => 'icon_confused.gif',
		          ':-D' => 'icon_biggrin.gif',
		          ':-P' => 'icon_razz.gif',
		          ':-o' => 'icon_surprised.gif',
		          ':-x' => 'icon_mad.gif',
		          ':-|' => 'icon_neutral.gif',
		          ';-)' => 'icon_wink.gif',
		    // This one transformation breaks regular text with frequency.
		    //     '8)' => 'icon_cool.gif',
		           '8O' => 'icon_eek.gif',
		           ':(' => 'icon_sad.gif',
		           ':)' => 'icon_smile.gif',
		           ':?' => 'icon_confused.gif',
		           ':D' => 'icon_biggrin.gif',
		           ':P' => 'icon_razz.gif',
		           ':o' => 'icon_surprised.gif',
		           ':x' => 'icon_mad.gif',
		           ':|' => 'icon_neutral.gif',
		           ';)' => 'icon_wink.gif',
		          ':!:' => 'icon_exclaim.gif',
		          ':?:' => 'icon_question.gif',
	    );
	}
	//smilies_reset();
	add_filter('woocommerce_page_title', 'customWooc_shop_page_title');
	function customWooc_shop_page_title( $page_title ) {
		if( 'Shop' == $page_title) {
			return '';
		}
	}
?>
