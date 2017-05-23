<!-- service section -->
<?php $theme_options = kadima_get_options(); ?>
<!--<div class="kadima_service">-->
<?php //if($theme_options['home_service_heading'] !='') { ?>
<!--<div class="container">-->
<!--	<div class="row">-->
<!--		<div class="col-sm-12">-->
<!--			<div class="kadima_heading_title">-->
<!--				<h3>--><?php //echo esc_attr($theme_options['home_service_heading']); ?><!--</h3>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<?php //} ?>

<div class="m-body">
        <div class="row u-title">
            <div class="col-md-2 text-right ">
                <i class="u-line"></i>
            </div>
            <div class="col-md-8 text-center">
                <h2 class="u-title">Ideal for Packing Solution, OEM  and ODM are welcome in our company.</h2>
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
                        <p>World-class Flexible Packaging Materials Supplier</p>
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
                <h2 class="u-title">Professional skiller from UPC will come to Audit every production line.</h2>
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
                        <p>World-class Flexible Packaging Materials Supplier</p>
                    </div>
                    <div class="row">
                    <?php for($i=1; $i<=4; $i++ ) { ?>
                            <div class="col-md-6">
                                <div class=" u-boxs u-cont">
                                    <div class="u-bb">
                                            <div class="u-left">
                                                <img class="u-img"  src="<?php echo esc_attr($theme_options['custom_img_2_'.$i]); ?>">
                                            </div>
                                            <div class="u-right">
                                                <h4 class="text-center"><?php echo esc_attr($theme_options['service_title_2_'.$i]); ?></h4>
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