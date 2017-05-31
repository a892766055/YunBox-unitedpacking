/* menu */
jQuery(document).ready(function($) {

    /**
     * Created by user on 2017/5/24.
     */
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


