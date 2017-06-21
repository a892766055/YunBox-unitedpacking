<?php //Template Name:onlineTracking
get_header(); ?>
    <head>
        <link href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui.min.css" rel="stylesheet">
        <script src="http://mockjs.com/dist/mock.js"></script>
    </head>
    <div class="container m-online" style="padding:300px 0 ">
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
<div class="col-md-12 text-center">

</div>


<?php get_footer(); ?>
<script>
        //json.data
        var name = "one";
        var Random = Mock.Random;
        Random.dataImage();
        Random.date();
        Random.cparagraph()
        Random.paragraph()
        Mock.mock('http://g.cn', {
            "name": "@first",
            "id": 123123,
            "time": "@date",
            'data': [
                {
                    "id":1,
                    "edit": true,
                    "time": "@date",
                    "stage":"order time",
                    "text":"June 20, 2017",
                    "imges":"http://unitedpacking.hk1i1.yunclever.com/wp-content/themes/kadima/images/o-t.png",
                    "img": [
                    ],
                },
                {
                    "id":2,
                    "edit": true,
                    "time": "@date",
                    "stage":"Row time",
                    "text":"June 20, 2017",
                    "imges":"http://unitedpacking.hk1i1.yunclever.com/wp-content/themes/kadima/images/o-t.png",
                    "img": [
                        {  'image': '@dataImage("200x200")'}
                    ],
                },
                {
                    "id":3,
                    "edit": true,
                    "time": "@date",
                    "stage":"Booking time",
                    "text":"June 20, 2017",
                    "imges":"http://unitedpacking.hk1i1.yunclever.com/wp-content/themes/kadima/images/o-t.png",
                    "img": [
                        {  'image': '@dataImage("200x200")'},
                        {  'image': '@dataImage("200x200")'},
                        {  'image': '@dataImage("200x200")'},
                        {  'image': '@dataImage("200x200")'}
                    ],
                },
                {
                    "id":4,
                    "edit": true,
                    "time": "@date",
                    "stage":"departure time",
                    "text":"June 20, 2017",
                    "imges":"http://unitedpacking.hk1i1.yunclever.com/wp-content/themes/kadima/images/o-c.png",
                    "img": [
                        {  'image': '@dataImage("200x200")'},
                        {  'image': '@dataImage("200x200")'},
                        {  'image': '@dataImage("200x200")'},
                        {  'image': '@dataImage("200x200")'},
                        {  'image': '@dataImage("200x200")'}
                    ],
                },
                {
                    "id":5,
                    "edit": true,
                    "stage":"DHL Numbers",
                    "time": "@date",
                    "text":"8888-8888",
                    "imges":"http://unitedpacking.hk1i1.yunclever.com/wp-content/themes/kadima/images/o-d.png",
                    "img": [],
                }
            ]
        });

        //json.data     end

        jQuery("#u-btn").click(function () {
            var datas =   jQuery("#u-text").val();
            // u-pro
            jQuery.ajax({
                type:"post",
                async:false,
                dataType: "json",
                url:"http://g.cn",
                data:datas,
                success:function (data) {
                    jQuery(".u-bd").empty();
                    var oL =  data.data.length;
                    console.log(data)
                    var text =   '<h2 class="col-md-12 text-center">Project progress diagram</h2>'+
                        '<p class="col-md-3">Project start time:'+ data.time + '</p>'+
                        '<p class="col-md-3">entry name:'+ data.name + '</p>'+
                        '<p class="col-md-3">Order ID:'+ data.id + '</p>';
                     jQuery("#u-tit").append(text);

                    var obj;
                    var oIcon = ' <i class="sui-icon icon-pc-right"></i>';
                    var oFi = ' <i class="triangle-right-bg"></i><i class="triangle-right"></i>';
                    var oclass = ["todo","finished","current"];
                    console.log(data.data)

                    for(var i =0;i<5;i++){
                        if(i === oL){
                            var oText = '<div class="wrap"> <div class="'+ oclass[2] +'"><label><span class="round">'+ i +'</span><span>'+ data.data[i].stage +'</span></label> </div> </div>';
                            obj += oText;
                        }else if (i < oL){
                            var oText = '<div class="wrap"> <div class="'+ oclass[1] +'"><label><span class="round">'+ oIcon +'</span><span>'+ data.data[i].stage +' </span></label> '+ oFi +' </div> </div>';
                            obj+= oText;
                        }else{
                            var oText = '<div class="wrap"> <div class="'+ oclass[0] +'"><label><span class="round">'+ i +'</span><span>'+ data.data[i].stage +' </span></label> </div> </div>';
                            obj+= oText;
                        }
                    }
                     jQuery("#u-pro").append(obj);
                    oBd(data);
                     jQuery("#u-pro .wrap").click(function(){
                         jQuery("#u-pro .wrap").eq( jQuery(this).index()).addClass("active").siblings().removeClass('active');
                         jQuery("#u-bd .u-bds").hide().eq( jQuery(this).index()).show();
                    });
                }
            });
        });
        function oBd(data) {
            var oL =  data.data.length;
            var oBd = '';
            var obj = data;
            for(var j=0;j<=oL-1;j++){
                var bd  = '';
                if(j==oL-1){
                    bd =  '<div class="col-md-12 u-bds "><p class="col-md-3">'+ (j+1) +'End of phase:'+ obj.data[j].time +'</p>'+
                        '<div class="col-md-12"><div class="u-bimg"><img src="'+ obj.data[j].imges +'"><p>'+ obj.data[j].stage +' </p> </div> <p class="u-pbtn"><i> '+ obj.data[j].text +'</i></p></div>'+
                        '<div class="col-md-12">'+ img(obj.data[j].img) +'</div>'+ '</div>';
                    oBd += bd;
                }else{
                    bd =  '<div class="col-md-12 u-bds" style="display: none"><p class="col-md-3">'+ (j+1) +'End of phase:'+ obj.data[j].time +'</p>'+
                        '<div class="col-md-12"><div class="u-bimg"><img src="'+ obj.data[j].imges +'"><p>'+ obj.data[j].stage +' </p> </div><p class="u-pbtn"><i> '+ obj.data[j].text +'</i></p></div>'+
                        '<div class="col-md-12 u-box2">'+ img(obj.data[j].img) +'</div>'+ '</div>';
                    oBd += bd;
                }
            }
             jQuery("#u-bd").append(oBd)
        }
        function img(val) {
            var data = val;
            var oImg ='',img = null;
            for(var i =0;i<data.length;i++){
                img = '<img class="u-img" src="'+data[i].image+'">';
                oImg += img;
            }
            return oImg;
        }

</script>

