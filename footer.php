<!-- kadima Callout Section -->
<!-- Footer Widget Secton -->


<footer>
    <div class="m-ft">
        <div class="container u-boxs">
            <div class="row ">
                <div class="col-md-2 col-md-offset-1">
                    <ul>
                        <li  class="u-title">
                            <h2 >INFORMATION </h2>
                        </li>
                        <li class="u-link"><a href="#">Home</a></li>
                        <li class="u-link"><a href="#">Why Choose Us</a></li>
                        <li class="u-link"><a href="#">Packing Products</a></li>
                        <li class="u-link"><a href="#">Services</a></li>
                        <li class="u-link"><a href="#">Contact </a></li>
                        <li class="u-link"><a href="#">Online Tracking</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-md-offset-1">
                    <ul>
                        <li class="u-title">
                            <h2>RECENT NEWS</h2>
                        </li>
                        <li class="u-link">
                            <a href="#">Jump link Jump link</a>
                        </li>
                        <li class="u-link">
                            <a href="#">Jump link Jump link</a>
                        </li>
                        <li class="u-link">
                            <a href="#">Jump link Jump link</a>
                        </li>
                        <li class="u-link">
                            <a href="#">Jump link Jump link</a>
                        </li>
                        <li class="u-link">
                            <a href="#">Jump link Jump link</a>
                        </li>
                    </ul>
                </div>
                <div class=" col-md-offset-1 col-md-5">
                    <ul>
                        <li class="u-title">
                            <h2 >CONTACT US</h2>
                        </li>
                        <li class="u-link">
                            <p><b> phone:</b>+86 592 3232201 / 3232202</p>
                            <p><b>Mobile + WhatsApp:</b> +86 13806016156</p>
                            <p><b>Email</b>:info@Upcdveloping.com</p>
                            <p ><b>Skype</b>:Pnlnui <b class="u-plfs">Fax:</b>+86 592 5635937</p>
                            <p><b>PM </b>901-8.1001 Anling Road,Huli district,Xiamen,China</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="text-center u-copyright">Copyright © 2015-2017 Unitedpacking Cooperation.All Rights Reserved.  </p>
        <!-- img src="images/ft-logo.png" alt="logo" -->
    </div>
</footer>

<!-- /Footer Widget Secton -->
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
<?php
	$language = get_client_language();
	if ($language != 'zh-cn') {
?>
	<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
	</script>
<?php
	}
?>
</body>
</html>
