/**
 * jQuery Cookie plugin
 *
 * Copyright (c) 2010 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */
jQuery.cookie = function (key, value, options) {

    // key and at least value given, set cookie...
    if (arguments.length > 1 && String(value) !== "[object Object]") {
        options = jQuery.extend({}, options);

        if (value === null || value === undefined) {
            options.expires = -1;
        }

        if (typeof options.expires === 'number') {
            var days = options.expires, t = options.expires = new Date();
            t.setDate(t.getDate() + days);
        }

        value = String(value);

        return (document.cookie = [
            encodeURIComponent(key), '=',
            options.raw ? value : encodeURIComponent(value),
            options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
            options.path ? '; path=' + options.path : '',
            options.domain ? '; domain=' + options.domain : '',
            options.secure ? '; secure' : ''
        ].join(''));
    }

    // key and possibly options given, get cookie...
    options = value || {};
    var result, decode = options.raw ? function (s) { return s; } : decodeURIComponent;
    return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
};

/**
 *
 * Template scripts
 *
 **/

// onDOMLoadedContent event
jQuery(document).ready(function() {	
	// Back to Top Scroll
    jQuery('#gk-top-link').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
	// Thickbox use
	jQuery(document).ready(function(){
		if(typeof tb_init != "undefined") {
			tb_init('div.wp-caption a');//pass where to apply thickbox
		}
	});
	// style area
	if(jQuery('#gk-style-area')){
		jQuery('#gk-style-area div').each(function(i){
			jQuery(this).find('a').each(function(index) {
				jQuery(this).click(function(e){
	            	e.stopPropagation();
	            	e.preventDefault();
					changeStyle(jQuery(this).attr('href').replace('#', ''));
				});
			});
		});
	}
	// font-size switcher
	if(jQuery('#gk-font-size') && jQuery('#gk-mainbody')) {
		var current_fs = 100;
		jQuery('#gk-mainbody').css('font-size', current_fs+"%");
		
		jQuery('#gk-increment').click(function(e){ 
			e.stopPropagation();
			e.preventDefault(); 
			
			if(current_fs < 150) { 
				jQuery('#gk-mainbody').animate({ 'font-size': (current_fs + 10) + "%"}, 200); 
				current_fs += 10; 
			} 
		});
		
		jQuery('#gk-reset').click(function(e){ 
			e.stopPropagation(); 
			e.preventDefault(); 
			
			jQuery('#gk-mainbody').animate({ 'font-size': "100%"}, 200); 
			current_fs = 100; 
		});
		
		jQuery('#gk-decrement').click(function(e){ 
			e.stopPropagation(); 
			e.preventDefault(); 
			
			if(current_fs > 70) { 
				jQuery('#gk-mainbody').animate({ 'font-size': (current_fs - 10) + "%"}, 200); 
				current_fs -= 10; 
			} 
		});
	}
	
	// Function to change styles
	function changeStyle(style){
		var file = $GK_TMPL_URL+'/css/'+style;
		jQuery('head').append('<link rel="stylesheet" href="'+file+'" type="text/css" />');
		jQuery.cookie($GK_TMPL_NAME+'_style', style, { expires: 365, path: '/' });
	}
	
		// login popup
		if(jQuery('#gk-popup-login')) {
			var popup_overlay = jQuery('#gk-popup-overlay');
			popup_overlay.css({'opacity': '0', 'display': 'block'});
			popup_overlay.fadeOut();
	
			var opened_popup = null;
			var popup_login = null;
			var popup_login_h = null;
			var popup_login_fx = null;
			
			popup_login = jQuery('#gk-popup-login');
			popup_login.css({'opacity': 0, 'display': 'block'});
			popup_login_h = popup_login.find('.gk-popup-wrap').outerHeight();
			
			popup_login.animate({'opacity': 0, 'height': 0 }, 200); 
			
			jQuery('#gk-login').click(function(e) {
				e.preventDefault();
				e.stopPropagation();
				
				popup_overlay.fadeTo(200, 0.45);
				popup_login.animate({'opacity':1, 'height': popup_login_h}, 200);
				opened_popup = 'login';
			});
			
			popup_overlay.click(function() {
				if(opened_popup == 'login')	{
					popup_overlay.fadeOut();
					popup_login.animate({
						'opacity' : 0,
						'height' : 0
					}, 200);
				}
			});
		}
});

// Image Show
jQuery(window).load(function(){	
	jQuery(".gk-is-wrapper-gk_appsprotech").each(function(i, el){
		el = jQuery(el);
		var elID = el.attr("id");
		var wrapper = jQuery('#'+elID);
		var $G = [];
		$G['anim_speed'] = el.attr('data-speed') || 500;
		$G['anim_interval'] = el.attr('data-interval') || 5000;
		$G['autoanim'] = el.attr('data-autoanim') ? (el.attr('data-autoanim') == "on" ? true : false) : true;
		var slides = [];
		var links = [];
		var loadedImages = (wrapper.find('.gk-is-preloader')) ? false : true;
		
		$G['blank'] = false;
		
		if(!loadedImages){
			var imagesToLoad = [];
			wrapper.find('.gk-is-slide').each(function(i, elm){
				elm = jQuery(elm);
				links.push(elm.find('a').first().attr('href'));
				var title = elm.attr('title');
				var cssclass = elm.attr('class');
			    var style = elm.attr('style');
				var alt = elm.children().first().attr('href');
				elm.find('a').remove();
				var src = elm.html();
				imagesToLoad.push(jQuery('<img src="'+src+'" class="'+cssclass+'" title="'+title+'" style="'+style+'" alt="'+alt+'" />').appendTo(elm.parent()));
				elm.remove();
			});
			
			var time = setInterval(function(){
				var process = 0;				
				jQuery(imagesToLoad).each(function(i, img){
					if(img[0].complete) process++;
 				});
 				
				if(process == imagesToLoad.length){
					clearInterval(time);
					loadedImages = process;
					setTimeout(function(){
						wrapper.find('.gk-is-preloader').fadeOut();
						wrapper.addClass('loaded');
						
						if(!jQuery.browser.msie) {
							setTimeout(function() {
								wrapper.find('.gk-is-preloader').remove();
							}, 400);
						}
					}, 400);
				}
			}, 200);
		}
		
		var time_main = setInterval(function(){
			if(loadedImages){
				clearInterval(time_main);
				
				wrapper.find(".gk-is-slide").each(function(i, elmt){
					elmt = jQuery(elmt);
					slides[i] = elmt;
					elmt.click(function(){ window.location = elmt.attr('alt'); });
					elmt.css("cursor", "pointer");
				});
				
				slides[0].addClass('active');
				
				if(wrapper.find('.gk-is-text')) {
					wrapper.find('.gk-is-text').first().addClass('active');
				}
				
				$G['actual_slide'] = 0;
				
				if(wrapper.find(".gk-is-next")) {
					wrapper.find(".gk-is-next").click(function() {					
						gk_is_appsprotech_anim(wrapper, slides, $G['actual_slide']+1, $G);
						$G['blank'] = true;
					});
					
					wrapper.find(".gk-is-prev").click(function() {
						gk_is_appsprotech_anim(wrapper, slides, $G['actual_slide']-1, $G);
						$G['blank'] = true;
					});
					
					wrapper.find('.gk-is-pagination li').each(function(i, li) {
						jQuery(li).click(function(e) {
							e.preventDefault();
							e.stopPropagation();
							gk_is_appsprotech_anim(wrapper, slides, i, $G);
							$G['blank'] = true;
						});
					});
				}
				
				if($G['autoanim']){				
				    setInterval(function(){
				        if(!$G['blank']) {
				        	gk_is_appsprotech_anim(wrapper, slides, $G['actual_slide']+1, $G);
				        } else {
				        	$G['blank'] = false;
				        }
				    }, $G['anim_interval'] * 1.0 + $G['anim_speed'] * 1.0);
				}
			}
		}, 250);
	});
	
	// tabs style "big-tabs"
	jQuery(document).find('.big-tabs .gk-tabs').each(function(i, tabmod) {
		tabmod = jQuery(tabmod);
		var div = jQuery('<div class="gk-arrow"><div></div></div>');
		tabmod.find('.gk-tabs-container').first().before(div);
		div.find('div').css('margin-left', '105px');
	});
});

function gk_tab_event_trigger(current, previous, module_id) { 
	var mod = jQuery('#' + module_id);
	
	if(mod.find('.gk-arrow div').first()) {
		var arrow = jQuery(mod.find('.gk-arrow div')).first();
		var postab = jQuery(mod.find('.gk-tabs-nav li').get(current));
		
		arrow.animate({
			'margin-left': ((postab.width() / 2.0) + postab.offset().left) - (mod.offset().left + 16)
		}, 250);
	}
}

function gk_is_appsprotech_anim(wrapper, slides, which, $G){
	if(which != $G['actual_slide']){
		var max = slides.length-1;
		if(which > max) which = 0;
		if(which < 0) which = max;
		var actual = $G['actual_slide'];
		var txts = wrapper.find(".gk-is-text");
		
		txts_actual = jQuery(txts.get(actual));
		txts_which = jQuery(txts.get(which));
		
		$G['actual_slide'] = which;
		slides[$G['actual_slide']].css("z-index",max+1);
		
		if(slides[actual].hasClass('active')) {
			slides[actual].removeClass('active');
		}
		
		if(!slides[which].hasClass('active')) {
			slides[which].addClass('active');
		}
		
		if(txts.length > 0) {							
			if(txts_actual.hasClass('active')) {
				txts_actual.removeClass('active');
			}
					
			if(!txts_which.hasClass('active')) {
				txts_which.addClass('active');
			}
		}
				
		if(wrapper.find('.gk-is-pagination')) {
			wrapper.find('.gk-is-pagination li').attr('class', '');
			jQuery(wrapper.find('.gk-is-pagination li').get(which)).attr('class', 'active');
		}		
	}
}