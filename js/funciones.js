/*CSS Browser Selector v0.4.0 (Nov 02, 2010)*/
function css_browser_selector(u){var ua=u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1},g='gecko',w='webkit',s='safari',o='opera',m='mobile',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')?g+' ff3':is('firefox/4')?g+' ff4':is('firefox/5')?g+' ff5':is('firefox/6')?g+' ff6':is('firefox/7')?g+' ff7':is('firefox/8')?g+' ff8':is('firefox/9')?g+' ff9':is('firefox/10')?g+' ff10':is('firefox/11')?g+' ff11':is('firefox/12')?g+' ff12':is('firefox/13')?g+' ff13':is('firefox/14')?g+' ff14':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);
/****************/

$(function(){

	/* Menu toggle */
	
	navToogle = {
		
		init: function(){
			var self = this;
			
			
			if($(window).width() > 768 ){
				var pad = parseInt($('.container-fluid').css('padding-right'));
				var ancho = -($(window).width()); // * .4 - pad);
			} else{
				var ancho = -($(window).width());
			}
			
			$('.navbar-toggler').on('click',function(e){
				e.preventDefault();

				var divColapse = $('#navbarSupportedContent');
				
				if(divColapse.parent().hasClass('colapseOn')){

					$(this).removeClass('toggled');
					divColapse
						.stop()
						.animate({
							right: ancho
						} , 800 , function(){
							$(this)
								.css('display','none')
								.parent()
								.removeClass('colapseOn');
							/*$('html').removeClass('overflow');*/
						});

				}else{

					$(this).addClass('toggled');

					divColapse
						.stop()
						.css('display','block')
						.animate({
							right:0
						} , 1000 , function(){
							$(this).parent().addClass('colapseOn');
							
						});
				}
				
			})
		}
	}
	
	navToogle.init();
	
	
	sliderGaleria = {
		init: function(){
			if($('article').hasClass('slider') || $('li').hasClass('slider')){
				$('.sliderArea').bxSlider({
					autoControls: true,
					pager: false
				});
			}
		}
	}
	
	sliderGaleria.init();
	
	goDown = {
		init: function(){
			//$('.headerImage').append('<a href="" title="" class="goDown">goDown</a>');
			this.onClickGoDown(); 
		},
		onClickGoDown: function(){
			$('.goDown').on('click',function(e){
				var sectionH = $('.headerImage').height();
				e.preventDefault();
				$('html, body').animate({scrollTop:sectionH},800);
			});
		}
	}
	
	goDown.init();
	
	navSectionsHeight = {
		init: function(){
			if($('section').hasClass('navSectionArea')){
				$('.navSectionArea li').each(function(i){
					var height = $(this).width();
					$(this).find('div').css('margin-top', height);
				})
			}
		}
	}
	
	navSectionsHeight.init();
	
	
	articleHeight = {
		init: function(){
			var self = this;
			if( $('html').hasClass('mobile')){
				if($('section').hasClass('textImageArea')){
					this.alturas($('.textImageArea'));
				}
				if($('section').hasClass('textMapArea')){
					this.alturas($('.textMapArea'));
				}
			}
		},
		alturas: function(e){
			var e = e;
			var alt = 0;
			e.find('article').each(function(e){
				if( alt < $(this).outerHeight()){
					alt = $(this).outerHeight();
				}
			});
			e.find('article').each(function(e){
				$(this).css('height', alt);
			});
			
		}
	}
	articleHeight.init();
	
	showVideos = {
		init:function(){
		
			$('.showVideo').on('click',function(e){
				e.preventDefault();
				$('html').addClass('overflow');
				$('.modalVideo').dialog({
					resizable: true,
					close: function(){
						$('html').removeClass('overflow');
						$('.modalVideo iframe')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
						
					}
				});
			})
		
		}
	}
	
	showVideos.init();
	
	disponibilidad = {
		init: function(){
			var pisos = $('.pisos a');
			var plantas = $('.plantas');
			$(pisos).on('click',function(e){
				e.preventDefault();
				$(pisos).removeClass('activo');
				$(this).addClass('activo');
				var planta = $(this).attr('href');
				//alert(planta);
				$(plantas)
					.find('.accordion')
						.addClass('hidden')
					.parent()
					.find(planta)
						.removeClass('hidden');
			
				
			})
		}
	}
	if($('body').hasClass('disponibilidad')){
		disponibilidad.init();
	}
	acordion = {
		init: function(){
			if($('section').find('.accordion')){
				$('.accordion').accordion({
					active: false,
					collapsible: true,
					heightStyle: "content"
				});
			}
		}
	}
	if($('body').hasClass('el-barrio')){
		if($(window).width() < 767 ){
			acordion.init();
		}
	}else{
		acordion.init();
	}
	
	modal = {
		init: function(){
			$('.modalContact').dialog()
		}
	}
	modal.init();

})

