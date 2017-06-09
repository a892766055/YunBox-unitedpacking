<?php $theme_options = kadima_get_options(); ?>
<style>
        .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus{
            color: #34b647;
            box-shadow:none !important;
        }
        .navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus{
            color: #34b647;
            box-shadow:none !important;
            background-color: inherit !important;
        }
        .dropdown-menu{
            background-color:rgba(51, 51, 51, 0.7);
        }
        .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover,
        .navbar-default .navbar-nav>.open>a:focus{
            background-color:rgba(51, 51, 51, 0.7);
            box-shadow: none;
        }
        .navigation_menu{
            position: fixed;
            background:rgba(51, 51, 51, 0.7);
        }

        @media (max-width: 767px) {
            .navigation_menu{
                position: relative;
            }
        }
    </style>
<div class="m-body">
        <div class="row u-title">
            <div class="col-md-2 text-right ">
                <i class="u-line"></i>
            </div>
            <div class="col-md-8 text-center">
                <h2 class="u-title">UNITEDPACKING COOPERATION, Ideal for One-Stop Packing Solution.</h2>
            </div>
            <div class="col-md-2 text-left">
                <i class="u-line"></i>
            </div>
        </div>
        <div class="row">
            <div class="u-bgimg u-bgimgs">
                <div class="container">
                    <div class="u-top text-center">
                        <h1>Our Core Products</h1>
                        <p></p>
                    </div>
                    <?php for($i=1; $i<=6; $i++ ) { ?>
                        <div class=" col-md-4 ">
                            <div class="u-box">
                                <div class="u-left">
                                    <img class="u-img" src="<?php echo esc_attr($theme_options['custom_img_1_'.$i]); ?>">
                                </div>
                                <div class="u-right">
                                    <h4 class="text-center"><?php echo esc_attr($theme_options['custom_title_1_'.$i]); ?></h4>
                                    <p class="text-left u-describe"><?php echo esc_attr($theme_options['custom_text_1_'.$i], true); ?></p>
                                    <p class="text-right u-p" >View All<span class="u-icon"></span></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row u-title">
            <div class="col-md-2 text-right ">
                <i class="u-line"></i>
            </div>
            <div class="col-md-8 text-center">
                <h2 class="u-title">Professional Skiller From UPC Will Come To Audit Every Production Line.</h2>
            </div>
            <div class="col-md-2 text-left">
                <i class="u-line"></i>
            </div>
        </div>
        <div class="row">
            <div class="u-bgimg u-hg">
                <div class="container">
                    <div class="u-top text-center">
                        <h1>Our Capabilities</h1>
                        <p></p>
                    </div>
                    <div class="row">
                    <?php for($i=1; $i<=4; $i++ ) { ?>
                            <div class="col-md-6">
                                <div class=" u-boxs u-cont">
                                    <div class="u-bb">
                                            <div class="u-left u-bg">
                                                <img class="u-img"  src="">
                                                <img class="u-img"  src="<?php echo esc_attr($theme_options['custom_img_2_'.$i]); ?>">
                                            </div>
                                            <div class="u-right" style="padding-left:1em;">
                                                <h4 class="text-center"><?php echo esc_attr($theme_options['custom_title_2_'.$i]); ?></h4>
                                                <p class="text-left u-describe"><?php echo esc_attr($theme_options['custom_text_2_'.$i], true); ?></p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
<!--    </div>-->
</div>
<script>



    var video = document.querySelector('video')
        , container = document.querySelector('#container');
    var oImg = document.getElementById("u-img");
    var setVideoDimensions = function () {
        // Video's intrinsic dimensions
        var w = video.videoWidth
            , h = video.videoHeight;

        // Intrinsic Ratio
        // Will be more than 1 if W > H and less if W < H
        var videoRatio = (w / h).toFixed(2);

        // Get the container's computed styles
        //
        // Also calculate the min dimensions required (this will be
        // the container dimentions)
        var containerStyles = window.getComputedStyle(container)
            , minW = parseInt( containerStyles.getPropertyValue('width') )
            , minH = parseInt( containerStyles.getPropertyValue('height') );

        // What's the min:intrinsic dimensions
        //
        // The idea is to get which of the container dimension
        // has a higher value when compared with the equivalents
        // of the video. Imagine a 1200x700 container and
        // 1000x500 video. Then in order to find the right balance
        // and do minimum scaling, we have to find the dimension
        // with higher ratio.
        //
        // Ex: 1200/1000 = 1.2 and 700/500 = 1.4 - So it is best to
        // scale 500 to 700 and then calculate what should be the
        // right width. If we scale 1000 to 1200 then the height
        // will become 600 proportionately.
        var widthRatio = minW / w
            , heightRatio = minH / h;

        // Whichever ratio is more, the scaling
        // has to be done over that dimension
        if (widthRatio > heightRatio) {
            var newWidth = minW;
            var newHeight = Math.ceil( newWidth / videoRatio );
        }
        else {
            var newHeight = minH;
            var newWidth = Math.ceil( newHeight * videoRatio );
        }

        oImg.style.width = newWidth + 'px';
        oImg.style.height =  '800px';

        video.style.width = newWidth + 'px';
        video.style.height = newHeight + 'px';

        video.style.loop = true;
    };


    video.addEventListener('loadedmetadata', setVideoDimensions, false);

    window.addEventListener('resize', setVideoDimensions, false);
    //首屏大视频处理结束

</script>