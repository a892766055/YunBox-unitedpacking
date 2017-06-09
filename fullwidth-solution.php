<?php $theme_options = kadima_get_options(); ?>
<?php //Template Name:fullwidth-solution
get_header();
 ?>
    <div class="m-ab-bn">
        <span class="u-img-ct"><b>solution</b></span>
    </div>
<?php
get_template_part('breadcrums');
?>
<div class="container m-bd-so">
    <div class="row ">
        <div class="col-md-12">
            <div class="product_category">
                <div class="container">
                    <h2 class="title text-center">Product classification</h2>
                    <h3 class="center text-center" id="subtitle">
                        Xiamen Shiyue Stone is located in Xiamen, Fujian of China. - a reliable and professional Granite and marble manufacturer and exporter.
                    </h3>
                    <div class="the_expert mt24">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul>

                                    <li>
                                        <label>
                                            <a href="/cn/products/cloud-communications">
                                                Granite
                                            </a>
                                        </label>
                                    </li>

                                </ul>
                            </div>


                            <div class="col-sm-3">
                                <ul>

                                    <li>
                                        <label>
                                            <a href="/cn/products/enterprise-networking/sdn-controller">
                                                Marble
                                            </a>
                                        </label>
                                    </li>

                                </ul>
                            </div>


                            <div class="col-sm-3">
                                <ul>

                                    <li>
                                        <label>
                                            <a href="/cn/products/enterprise-networking/switches">
                                                Others
                                            </a>
                                        </label>
                                    </li>

                                </ul>
                            </div>


                            <div class="col-sm-3">
                                <ul>

                                    <li>
                                        <label>
                                            <a href="/cn/products/enterprise-networking/routers">
                                                Quartzite
                                            </a>
                                        </label>
                                    </li>

                                </ul>
                            </div>


                            <div class="col-sm-3">
                                <ul>

                                    <li>
                                        <label>
                                            <a href="/cn/products/enterprise-networking/wlan">
                                                Sandstone
                                            </a>
                                        </label>
                                    </li>

                                </ul>
                            </div>


                            <div class="col-sm-3">
                                <ul>

                                    <li>
                                        <label>
                                            <a href="/cn/products/cloud-computing-dc/servers">
                                                Slate
                                            </a>
                                        </label>
                                    </li>

                                </ul>
                            </div>


                            <div class="col-sm-3">
                                <ul>

                                    <li>
                                        <label>
                                            <a href="/cn/products/cloud-computing-dc/storage">
                                                Travertine
                                            </a>
                                        </label>
                                    </li>

                                </ul>
                            </div>


                            <div class="col-sm-3">
                                <ul>

                                    <li>
                                        <label>
                                            <a href="/cn/products/cloud-computing-dc/cloud-computing">
                                                Basalt
                                            </a>
                                        </label>
                                    </li>

                                </ul>
                            </div>


                            <div class="col-sm-3">
                                <ul>
                                    <li>
                                        <label>
                                            <a href="/cn/products/enterprise-networking/security">
                                                Culture Stone
                                            </a>
                                        </label>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul>
                                    <li>
                                        <label>
                                            <a href="/cn/products/fixed-network/transport">
                                                Limestone
                                            </a>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="more text-right">
                        <a href="/cn/allproduct">
                            <i></i>
                            All products
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h2 class="text-center u-h2">Successful case</h2>
        </div>
        <?php for($i=1; $i<=4; $i++ ) { ?>
                <div class="col-md-6 u-box">
                    <div class="col-md-5">
                        <img src="<?php echo esc_attr($theme_options['custom_img_6_'.$i]); ?>">
                    </div>
                    <div class="col-md-7">
                        <h5><a href="<?php echo esc_attr($theme_options['custom_link_6_'.$i]); ?>"><?php echo esc_attr($theme_options['custom_title_6_'.$i]); ?></a></h5>
                        <p><?php echo esc_attr($theme_options['custom_text_6_'.$i]); ?></p>
                    </div>
                </div>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>