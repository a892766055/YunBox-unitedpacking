/* menu */
jQuery(document).ready(function() {


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
    video.addEventListener('loadedmetadata', setVideoDimensions, false);
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


