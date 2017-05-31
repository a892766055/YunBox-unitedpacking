/* menu */
jQuery(document).ready(function($) {


    /**
     * Created by user on 2017/5/24.
     */
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
                "img": [
                    {  'image': '@dataImage("100x100")'},
                    {  'image': '@dataImage("100x100")'}
                ],
                'title':'@paragraph'
            },
            {
                "id":2,
                "edit": true,
                "time": "@date",
                "img": [
                    {  'image': '@dataImage("100x100")'}
                ],
                'title':'@paragraph'
            },
            {
                "id":3,
                "edit": true,
                "time": "@date",
                "img": [
                    {  'image': '@dataImage("100x100")'},
                    {  'image': '@dataImage("100x100")'}

                ],
                'title':'@paragraph'
            },
            {
                "id":4,
                "edit": true,
                "time": "@date",
                "img": [
                    {  'image': '@dataImage("100x100")'},
                    {  'image': '@dataImage("100x100")'},
                    {  'image': '@dataImage("100x100")'}
                ],
                'title':'@paragraph'
            }
        ]
    });

	//json.data     end



    $("#u-btn").click(function () {
            var datas =  $("#u-text").val();
            // u-pro
            $.ajax({
                type:"post",
                async:false,
                dataType: "json",
                url:"http://g.cn",
                data:datas,
                success:function (data) {
                    $(".u-bd").empty();
                    var oL =  data.data.length;
                    console.log(data)
                    var text =   '<h2 class="col-md-12 text-center">Project progress diagram</h2>'+
                        '<p class="col-md-3">Project start time:'+ data.time + '</p>'+
                        '<p class="col-md-3">entry name:'+ data.name + '</p>'+
                        '<p class="col-md-3">Order ID:'+ data.id + '</p>';
                    $("#u-tit").append(text);

                    var obj;
                    var oIcon = ' <i class="sui-icon icon-pc-right"></i>';
                    var oFi = ' <i class="triangle-right-bg"></i><i class="triangle-right"></i>';
                    var oclass = ["todo","finished","current"];
                    for(var i =1;i<=6;i++){
                        if(i === oL){
                            var oText = '<div class="wrap"> <div class="'+ oclass[2] +'"><label><span class="round">'+ i +'</span><span>The'+ i +'step</span></label> </div> </div>';
                            obj += oText;
                        }else if (i < oL){
                            var oText = '<div class="wrap"> <div class="'+ oclass[1] +'"><label><span class="round">'+ oIcon +'</span><span>The'+ i +'step </span></label> '+ oFi +' </div> </div>';
                            obj+= oText;
                        }else{
                            var oText = '<div class="wrap"> <div class="'+ oclass[0] +'"><label><span class="round">'+ i +'</span><span>The'+ i +'step </span></label> </div> </div>';
                            obj+= oText;
                        }
                    }
                    $("#u-pro").append(obj);
                    oBd(data);
                    $("#u-pro .wrap").click(function(){
                        $("#u-pro .wrap").eq($(this).index()).addClass("active").siblings().removeClass('active');
                        $("#u-bd .u-bds").hide().eq($(this).index()).show();
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
                        '<div class="col-md-12">'+ img(obj.data[j].img) +'</div>'+
                        '<p class="col-md-offset-3 col-md-6 ">'+ obj.data[j].title +'</p></div>';
                    oBd += bd;
                }else{
                    bd =  '<div class="col-md-12 u-bds" style="display: none"><p class="col-md-3">'+ (j+1) +'End of phase:'+ obj.data[j].time +'</p>'+
                        '<div class="col-md-12">'+ img(obj.data[j].img) +'</div>'+
                        '<p class="col-md-offset-3 col-md-6 ">'+ obj.data[j].title +'</p></div>';
                    oBd += bd;
                }
            }
            $("#u-bd").append(oBd)
        }
        function img(val) {
            var data = val;
            var oImg ='',img = null;
            for(var i =0;i<data.length;i++){
                img = '<img src="'+data[i].image+'">';
                oImg += img;
            }
            return oImg;
        }

    //首屏大视频处理
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

    if(video){
        video.addEventListener('loadedmetadata', setVideoDimensions, false);
    }

    window.addEventListener('resize', setVideoDimensions, false);
//首屏大视频处理结束


	if( jQuery(window).width() > 767) {
	   jQuery('.nav li.dropdown').hover(function() {
		   jQuery(this).addClass('open');
	   }, function() {
		   jQuery(this).removeClass('open');
	   });
	   jQuery('.nav li.dropdown-menu').hover(function() {
		   jQuery(this).addClass('open');
	   }, function() {
		   jQuery(this).removeClass('open');
	   });
	}
	jQuery('.nav li.dropdown').find('.caret').each(function(){
		jQuery(this).on('click', function(){
			if( jQuery(window).width() < 768) {
				jQuery(this).parent().next().slideToggle();
			}
			return false;
		});
	});
	/* Menu Tab */
	jQuery("li").on('click', function () {
        jQuery(".p_front").addClass("hidden");
        jQuery("." + jQuery(this).attr("id")).removeClass("hidden");
    });
});
/*about theme page menu active */
jQuery(document).ready(function() {
	var active_menu;
	jQuery('.theme-menu').click(function(){
		active_menu=jQuery(this).attr('id');
		jQuery('.theme-menu').removeClass('active');
		jQuery('.theme-menu#'+active_menu).addClass('active');
	});
});
/* menu */
jQuery(document).ready(function() {
	if( jQuery(window).width() > 767) {
	   jQuery('.nav li.dropdown').hover(function() {
		   jQuery(this).addClass('open');
	   }, function() {
		   jQuery(this).removeClass('open');
	   });
	   jQuery('.nav li.dropdown-submenu').hover(function() {
		   jQuery(this).addClass('open');
	   }, function() {
		   jQuery(this).removeClass('open');
	   });
	}
	jQuery('li.dropdown').find('.fa-angle-down').each(function(){
		jQuery(this).on('click', function(){
			if( jQuery(window).width() < 767) {
				jQuery(this).parent().next().slideToggle();
			}
			return false;
		});
	});
});
/* kadima social tooltip js */
jQuery(function(){
	jQuery('li').tooltip();
	jQuery("[data-toggle='tooltip']").tooltip();
	jQuery("[data-toggle='popover']").popover();
});
/* Scroll To Top Section */
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 100) {
			jQuery('.kadima_scrollup').fadeIn();
		} else {
			jQuery('.kadima_scrollup').fadeOut();
		}
	});
	jQuery('.kadima_scrollup').click(function () {
		jQuery("html, body").animate({
			scrollTop: 0
		}, 600);
		return false;
	});
	jQuery('#formpostmail').submit(function() {
		var name = document.getElementById('yourname').value;
		var mail = document.getElementById('youremail').value;
		var msg = document.getElementById('yourmessage').value;
		if(name!='' && mail!='' && msg!=''){
			jQuery.ajax({
				type: 'POST',
				url: 'http://api.yunclever.com/v2/Public/ybox/?',
				data: {
					service: 'Mail.sendMail',
					title: '您有新的询盘信息——来自全网平台',
					mailto: 'marketing@topillumination.com',
					content: '客户名称' + name + '<br/>' + '客户邮箱' + mail + '<br/>' + '客户信息' + msg,
					ybform: true
				},
				datatype: 'json',
				beforeSend: function () {

				},
				success: function (data) {
					alert('发送成功!')
					document.getElementById('yourname').value = ''
					document.getElementById('youremail').value = ''
					document.getElementById('yourmessage').value = ''
				},
				complete: function (XMLHttpRequest, textStatus) {
				   //alert(XMLHttpRequest.responseText);
				   //alert(textStatus);
				},
				error: function () {
				}
			});
		}
		return false;
	});
});
jQuery.browser = {};
(function () {
	jQuery.browser.msie = false;
	jQuery.browser.version = 0;
	if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
		jQuery.browser.msie = true;
		jQuery.browser.version = RegExp.$1;
	}
})();


