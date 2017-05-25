<?php //Template Name:onlineTracking
get_header();
get_template_part('breadcrums'); ?>
    <head>
    </head>
    <div class="container m-online" style="padding:150px 0 ">
        <div class="row">
            <h3 class="col-md-12 text-center" >Order inquiry</h3>
            <div class="col-md-offset-3 col-lg-6">
                <div class="input-group">
                    <input id="u-text" type="text" class="form-control" maxlength="6"  placeholder="Search for...">
                    <span class="input-group-btn">
                    <button id="u-btn" class="btn btn-default" type="button">GO!</button>
                </span>
                </div>
            </div>

            <div id="u-tit"></div>
            <div id="u-pro" class="sui-steps col-md-12 text-center"></div>
            <div id="u-bd"></div>
        </div>
    </div>
<?php get_footer(); ?>