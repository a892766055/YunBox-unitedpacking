<!--<div id="myCarousel" class="carousel slide" data-ride="carousel">-->
<!--    <div class="carousel-inner">-->
<!--    --><?php
//        $theme_options = kadima_get_options();
//        $j=1;
//		for($i=1; $i<=3; $i++) {
//            if($theme_options['slide_image_'.$i]!='') {
//    ?>
<!--                <div class="item --><?php //if($j==1) echo "active"; ?><!--">-->
<!--                    <img src="--><?php //echo esc_url($theme_options['slide_image_'.$i]); ?><!--" class="img-responsive" alt="--><?php //echo esc_attr($theme_options['slide_title_'.$i]); ?><!--" />-->
<!--                        <div class="container">-->
<!--                            <div class="carousel-caption">-->
<!--                            --><?php //if($theme_options['slide_title_'.$i]!='') {  ?>
<!--                                <div class="carousel-text">-->
<!--                                    <h1 class="animated bounceInRight">-->
<!--                                        --><?php //echo esc_attr($theme_options['slide_title_'.$i]); ?>
<!--                                    </h1>-->
<!--                                --><?php //if($theme_options['slide_desc_'.$i]!='') {  ?>
<!--                                    <ul class="list-unstyled carousel-list">-->
<!--                                        <li class="animated bounceInLeft">--><?php //echo esc_attr($theme_options['slide_desc_'.$i]); ?><!--</li>-->
<!--                                    </ul>-->
<!--                                --><?php //}
//                                    if($theme_options['slide_btn_text_'.$i]!='') { ?>
<!--                                        <a class="kadima_blog_read_btn animated bounceInUp" href="--><?php //if($theme_options['slide_btn_link_'.$i]!='') { echo esc_url($theme_options['slide_btn_link_'.$i]); } ?><!--" role="button">--><?php //echo esc_attr($theme_options['slide_btn_text_'.$i]); ?><!--</a>-->
<!--                                --><?php //} ?>
<!--                                </div>-->
<!--                            --><?php //} ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--    --><?php //$j++; }  } ?>
<!--    </div>-->
<!--    <ol class="carousel-indicators">-->
<!--    --><?php //for($i=0; $i<$j-1; $i++) { ?>
<!--        <li data-target="#myCarousel" data-slide-to="--><?php //echo $i; ?><!--" --><?php //if($i==0) { echo 'class="active"'; } ?><!-- ></li>-->
<!--    --><?php //} ?>
<!--	</ol>-->
<!--    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>-->
<!--    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>-->
<!--</div>-->

<div style=" position: relative">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner m-nav-wh">
            <div  class="item active">
                <div id="container"  style="height: 800px">
                    <video autoplay muted loop="loop" >
                        <source  src="http://localhost/wrd-lxh/wp-content/themes/lxh/vedio/ad.mp4" type="video/mp4">
                        <!--你的浏览器不支持此视频格式！请更换浏览器-->
                    </video>
                    <!--<img id="play" class="u-paly"  src="images/play.png">-->
                    <!--<img id="play1" class="u-paly"  src="images/pause.png">-->
                </div>
                <div class="u-mb" style=" background-color: rgba(51, 51, 51, 0.7);">
                    <div class="u-tt">
                        <h2 class="text-center">Our Core Products</h2>
                        <p>World-class Flexible Packaging Materials Supplier</p>
                    </div>
                </div>
            </div>
            <div  class="item">
                <img  id="u-img" src="http://localhost/wrd-lxh/wp-content/themes/lxh/images/banner.jpg" alt="banner-1">
            </div>
        </div>
    </div>
</div>
