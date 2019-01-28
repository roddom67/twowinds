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
	if($('body').hasClass('disponibilidad')){
		
		acordion.init();
	}
	
	modal = {
		init: function(){
			$('.modalContact').dialog()
		}
	}
	modal.init();

	
	/* Departamentos */
	
	pisos = {
		init: function(){
			var self = this;
			if($('body').hasClass('disponibilidad')){
				$('.disponibilidadArea select').val(0);
				$('.filtroPiso a').removeClass('activo');
				self.pisos();
			}
		},
		pisos: function(){
			var self = this;
			var filtroPiso = $('.filtroPiso a');
			var pisosArea = $('.disponibilidadArea .departamentos');
			
			$(filtroPiso).on('click',function(e){
				e.preventDefault();
				
				$('.disponibilidadArea select').val(0);
				
				if( $(this).hasClass('activo')){

					$(this).removeClass('activo');
					$(pisosArea)
						.find('h3')
							.css('display','flex')

				}else{
				
					var piso = '.'+$(this).attr('href');
					$(filtroPiso).removeClass('activo');
					$(this).addClass('activo');
				
					$(pisosArea)
						.find('h3')
							.css('display','none')
						.parent()
						.find(piso)
							.css('display','flex')
				}
			});
		}
	}
	pisos.init();
	
	filtroDepartamento ={
		init: function(){
			var self = this;
			if($('body').hasClass('disponibilidad')){
				self.filtroDpto();
			}
		},
		filtroDpto: function(){
			var self = this;
			
			var select = $('.disponibilidadArea select');
			var pisosArea = $('.disponibilidadArea .departamentos');
			
			$(select).on('change', function(e){
				e.preventDefault();
				
				$('.filtroPiso a').removeClass('activo');
				var selected = $(this).val();
				var rooms = '';
				
				switch(selected){
					case '0':
						rooms = 'allRooms';
						break;
					default:
						rooms = '.rooms'+ selected;
				}

				if(rooms == 'allRooms'){
					$(pisosArea)
						.find('h3')
							.css('display','flex');
				}else{
					$(pisosArea)
						.find('h3')
							.css('display','none')
						.parent()
						.find(rooms)
							.css('display','flex')
				}
				
			});
		}
	}
	filtroDepartamento.init();
	
	home = {
		init: function(){
			
			$pantalla = $(window);
			
			$('.parallax').each(function(){
				var $this = $(this);
				$pantalla.scroll(function() {
					var y = -($pantalla.scrollTop() / $this.data('movimiento')); 
					var xy = '50% '+ y + 'px';
					$this.css({ top: xy });
					
					var h = $pantalla.height();
					var t = ($pantalla.scrollTop() / h *10)+90;
					
					if(t < 100){ w = t + '%'}else{w = '100%'}
					$this.css({ width: w })
				});
			});
		}
	}
	
	home.init();
	

})

