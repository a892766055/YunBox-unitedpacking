<?php //Template Name:fullwidth-contact
get_header();
 ?>
    <div class="m-ab-bn">
        <span class="u-img-ct"><b> contact us</b></span>
    </div>
<?php
get_template_part('breadcrums');
?>
    <div class="container">
        <div class="row ">
            <div class="col-md-12 u-ct">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">E-mail</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Subject</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Message</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="col-md-6 u-ct-rg">
                    <div class="col-md-6 u-ab-box">
                        <span class="ct-icon"></span>
                        <p>	Rm. 509, Zhonghang Catic, No. 4, Yuehua Road, Huli Dist., Xiamen, Fujian, China </p>
                    </div>
                    <div class="col-md-6 u-ab-box">
                        <span class="ct-icon1"></span>
                        <p>TEL<br>+86-592-2631788</p>
                    </div>
                    <div class="col-md-6 u-ab-box">
                        <span class="ct-icon2"></span>
                        <p>info@shiyuestone.com</p>
                    </div>
                    <div class="col-md-6 u-ab-box">
                        <span class="ct-icon3"></span>
                        <p>Skype<br>business.xia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>