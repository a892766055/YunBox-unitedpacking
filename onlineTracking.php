<?php //Template Name:onlineTracking
get_header(); ?>
    <head>
        <link href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui.min.css" rel="stylesheet">
        <script src="http://mockjs.com/dist/mock.js"></script>
    </head>
    <div class="container m-online" style="padding:250px 0 ">
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
            <div id="u-tit" class="u-bd"></div>
            <div id="u-pro" class="sui-steps u-bd col-md-12 text-center"></div>
            <div id="u-bd" class="u-bd"></div>
        </div>
    </div>
<?php get_footer(); ?>