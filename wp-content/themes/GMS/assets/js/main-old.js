jQuery(function ($) {

    var ua = navigator.userAgent.toLowerCase();
    var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);


    //sp tel
    $(function () {
        if (!isMobile) {
            $('a[href^="tel:"]').on('click', function (e) {
                e.preventDefault();
            });
            $('a[href^="tel:"]').css({
                "pointer-events": "none",
                "color": "#333333"
            });
            $('a[href^="tel:"]').hover(function () {
                $(this).css({
                    "opacity": "1",
                    "cursor": "default",
                    "text-decoration": "none"
                });
            });
        }
    });

    //switching image
    $(function () {
        var i = $('.switch-img'), t = "_pc", s = "_sp", a = 768;
        i.each(function () {
            function i() {
                var i = parseInt($(window).width());
                i >= a ? c.attr('src', c.data('img').replace(s, t)).css({visibility: 'visible'}) : c.attr('src', c.data('img')).css({visibility: 'visible'})
            }

            var c = $(this);
            $(window).resize(function () {
                i()
            }), i()
        })
    });


	
    //scroll
    $(function () {
        $('.scroll').click(function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            var dest = url.split('#');
            var target = dest[1];
            var target_offset = $('#' + target).offset();
            var target_top = target_offset.top - 100;
            $('html, body').animate({scrollTop: target_top}, 500, 'swing');
            return false;
        });
    });	
	
	 //add param for manual_qa

	$('#allSeminar .category-manual a').click(function (e) {
		e.preventDefault();
		var idCat = $(this).data('id')
			href    = $(this).attr('href');
		
		location = href + '?id-cat=' + idCat ;
		var target_offset = $('#p1').offset().top;
		console.log( target_offset);
		$('html, body').animate({scrollTop: target_offset}, 0);
	});


	$(document).ready(function(){ 
		var href = window.location,
		url = new URL(href),
		action = url.searchParams.get("id-cat");
       if (action) {
		var target_offset = $('#p1').offset().top;
		$('html, body').animate({scrollTop: target_offset}, 0);
	   }

	});

	$(document).ready(function(){ 
        urlpage = window.location.href;
		var str2 = "page";
		if( urlpage.indexOf(str2) != -1){
			var target_offset = $('#breadcrumb-footer').offset().top;
			$('html, body').animate({scrollTop: target_offset}, 0);
		}
	
	});
	// Bắt sự kiện click cho từng video

	$('#camcat  .img-video').click(function() {
		$(this).parents('.video-manual').find('.modal01').show();
		$(this).parents('.video-manual').find('.btn-play').trigger('click');
	});

	// Bắt sự kiện click vào nút đóng modal
	$('#camcat  .close').click(function(event) {
		// Dừng video và ẩn modal
		$(this).parents('.modal-content').find('.btn-play').trigger('click');
		$(this).parents('.modal01').hide();
	});


	$("#page-top").click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
     });
	
	$('.page-top a').click(function(event){
        event.preventDefault();
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });	
	
	$("#header-menu .toggle-contact").click(function(){
		$("#header-menu .contact-fix").toggleClass("is-open");
	});
	
	// 	open Menu
	$("#header-menu .btn-openMenu").click(function () {
        $("#header-menu .header-megamenu").toggleClass("is-open");
        $(this).toggleClass("is-open");
        $("#header-menu").toggleClass("is-openMenu");
		$("body").toggleClass("is-active");
        $(this).parents('#header-menu').toggleClass("open");
        $(this).find("span").toggleClass("open")
        $(this).parents('#header-menu').find("#changeMe").toggleClass("open");
        $(this).parents('#header-menu').find(".bg-nav").toggleClass("open");
    });	
	// 	Open caseStudy
	$("#caseStudy .list-case .item-case .title-case").click(function () {
		$(this).hide()
        $(this).next().show();
    });
	
	$("#caseStudy .list-case .open").click(function () {
        $(this).parents('.open-block').hide('slow');
		$(this).parents('.item-case').find(".title-case").show()
    });	
   // 	Open page cloud
   $('#cloud .toggle-item-btn').click(function(){
     
    $(this).parents('.left').siblings('.content-toggle').stop().slideToggle('open');
    $(this).toggleClass('open');
    $(this).siblings('.content-toggle').toggleClass('open')
   });
    $('#lifeSupport .div-play ').click(function(event){
        $(this).parents('.right-video').find('.btn-play').trigger('click');
        $(this).toggleClass('open')
   });
	
	$('#maetra .div-play ').click(function(event){
        $(this).parents('.right-video').find('.btn-play').trigger('click');
        $(this).toggleClass('open')
   });
	
	
	
	 $('#homepage .div-play ').click(function(event){
		$(this).parents('.img-about').find('.btn-play').trigger('click');
		$(this).toggleClass('open')
   });
	
	

	    // tab camcat-manual
    $('#camcat .list-tab .item-tab').click(function() {
        var index = $('#camcat .list-tab .item-tab').index(this);
        $('#camcat .list-tab .item-tab, #camcat .content').removeClass('active');
        $(this).addClass('active');
        $('#camcat .content').eq(index).addClass('active');
	
    });  
	
	
	  // tab camcat-manual 
  $('#camcat  .item-tab-pdf').click(function() {
	console.log("pdf")
	var index = $('#camcat  .item-tab-pdf').index(this);
	$('#camcat .item-tab-pdf, #camcat .content-pdf').removeClass('active');
	$(this).addClass('active');
	$('#camcat .content-pdf').eq(index).addClass('active');

});  

  // tab camcat-manual 
  $('#camcat  .item-tab-pdf-one').click(function() {
	console.log("pdf")
	var index = $('#camcat  .item-tab-pdf-one').index(this);
	$('#camcat .item-tab-pdf-one, #camcat .content-pdf-one').removeClass('active');
	$(this).addClass('active');
	$('#camcat .content-pdf-one').eq(index).addClass('active');

});  
	
	
	
	
	

    //add modal for report singleseminar 
	$('.box').click(function () {
		$('.modal').fadeIn();
        $('#header-menu ').hide();
		$('#breadcrumb').css( 'opacity', 0 );
// 		$('#breadcrumb-mobi').css( 'opacity', 0 );
		
	})

	$(" .close").click(function () {
        $('#header-menu').css( 'display','block' );
		$('.modal').hide();
		$('#breadcrumb').css( 'opacity', 1 );
// 		$('#breadcrumb-mobi').css( 'opacity', 1 );
	})

   
	$(".table-download input").attr("required", "required");
    // js open btn submit
    changeSubmitBtn();
    $('.mw_wp_form_input .privacy-box .privacy-check').click(function(){changeSubmitBtn();});
    function changeSubmitBtn() {
        if ($('.mw_wp_form_input .privacy-box label input').prop('checked')) {
            $('.mw_wp_form_input .submit-btn input[type="submit"]').removeAttr("disabled");
        } else {
            $('.mw_wp_form_input .submit-btn input[type="submit"]').attr("disabled", "disabled");
        }
    }

    $('.tab_box .tab_btn').click(function() {
        var index = $('.tab_box .tab_btn').index(this);
        $('.tab_box .tab_btn, .tab_box .tab_panel').removeClass('active');
        $(this).addClass('active');
        $('.tab_box .tab_panel').eq(index).addClass('active');
    });
	
   $("#pwd").keyup(function() {
	let valueIput = $('#pwd').val();
		if (valueIput === "Cam2022CamCat"){
			$('#content-manual').show('slow');
			$(this).parents('.box-form').hide();
	    }
		else {
			$("#test1").text("正しいパスワードを入力してください");
		}
   });
	
	$("#pass-manual").keyup(function() {
	let valueIput = $(this).val();
		if (valueIput === "Cam2022CamCat"){
			$("#erro").text("");
	    }
		else {
			$("#erro").text("正しいパスワードを入力してください");
		}
   });
	
	
	$('.open_link').click(function () {
		$(this).siblings('.list_toggle').stop().slideToggle(600);
        $(this).toggleClass('close_link');
	});


	$('.btn-contact-mb').click(function () {
        $("#header-menu .header-megamenu").removeClass("is-open");
		$('.btn-openMenu').removeClass("is-open");
        $("#header-menu").removeClass("is-openMenu");
		$("body").removeClass("is-active");
        $(this).parents('#header-menu').removeClass("open");
        $('.btn-openMenu').find("span").removeClass("open")
        $(this).parents('#header-menu').find("#changeMe").removeClass("open");
        $(this).parents('#header-menu').find(".bg-nav").removeClass("open");
	});
	
	
	
	
	let seminardisable = $("#single-seminar #contact .link-page");

	if (seminardisable.hasClass("disable")) {
        seminardisable.html("本セミナーは終了しました")
    }
	
    let checkdowload = $('#allDownload input[type="checkbox"]');
    checkdowload.on("change", function ()  {
		if(this.checked) {
			$(this).parents('.tab_panel').find('.btn-submit').attr('disabled' , false);
			$(this).parents('.tab_panel').find('.btn-submit').addClass('nodisabled');
		} 
	});
	
	

   function submitStop(e){
	if (!e) var e = window.event;
	if(e.keyCode == 13)
		return false;
    }
    window.onload = function (){
        var list = document.getElementsByTagName("input");
        for(var i=0; i<list.length; i++){
            if(list[i].type == 'email' || list[i].type == 'password'|| list[i].type == 'text'|| list[i].type == 'number'|| list[i].type == 'tel'){
                list[i].onkeypress = function (event){
                    return submitStop(event);
                };
            }
        }
    }

});

(function ($) {
	$.fn.autoKana = function (element1, element2, passedOptions) {
		var options = $.extend(
			{
				'katakana': false
			}, passedOptions);

		var kana_extraction_pattern = new RegExp('[^ 　ぁあ-んー]', 'g');
		var kana_compacting_pattern = new RegExp('[ぁぃぅぇぉっゃゅょ]', 'g');
		var elName,
			elKana,
			active = false,
			timer = null,
			flagConvert = true,
			input,
			values,
			ignoreString,
			baseKana;

		elName = $(element1);
		elKana = $(element2);
		active = true;
		_stateClear();

		elName.blur(_eventBlur);
		elName.focus(_eventFocus);
		elName.keydown(_eventKeyDown);

		function start() {
			active = true;
		};

		function stop() {
			active = false;
		};

		function toggle(event) {
			var ev = event || window.event;
			if (event) {
				var el = Event.element(event);
				if (el.checked) {
					active = true;
				} else {
					active = false;
				}
			} else {
				active = !active;
			}
		};

		function _checkConvert(new_values) {
			if (!flagConvert) {
				if (Math.abs(values.length - new_values.length) > 1) {
					var tmp_values = new_values.join('').replace(kana_compacting_pattern, '').split('');
					if (Math.abs(values.length - tmp_values.length) > 1) {
						_stateConvert();
					}
				} else {
					if (values.length == input.length && values.join('') != input) {
						if (input.match(kana_extraction_pattern)) {
							_stateConvert();
						}
					}
				}
			}
		};

		function _checkValue() {
			var new_input, new_values;
			new_input = elName.val()
			if (new_input == '' && elKana.val() != '') {
				_stateClear();
				_setKana();
			} else {
				new_input = _removeString(new_input);
				if (input == new_input) {
					return;
				} else {
					input = new_input;
					if (!flagConvert) {
						new_values = new_input.replace(kana_extraction_pattern, '').split('');
						_checkConvert(new_values);
						_setKana(new_values);
					}
				}
			}
		};

		function _clearInterval() {
			clearInterval(timer);
		};

		function _eventBlur(event) {
			_clearInterval();
		};
		function _eventFocus(event) {
			_stateInput();
			_setInterval();
		};
		function _eventKeyDown(event) {
			if (flagConvert) {
				_stateInput();
			}
		};
		function _isHiragana(chara) {
			return ((chara >= 12353 && chara <= 12435) || chara == 12445 || chara == 12446);
		};
		function _removeString(new_input) {
			if (new_input.indexOf(ignoreString) !== -1) {
				return new_input.replace(ignoreString, '');
			} else {
				var i, ignoreArray, inputArray;
				ignoreArray = ignoreString.split('');
				inputArray = new_input.split('');
				for (i = 0; i < ignoreArray.length; i++) {
					if (ignoreArray[i] == inputArray[i]) {
						inputArray[i] = '';
					}
				}
				return inputArray.join('');
			}
		};
		function _setInterval() {
			var self = this;
			timer = setInterval(_checkValue, 30);
		};
		function _setKana(new_values) {
			if (!flagConvert) {
				if (new_values) {
					values = new_values;
				}
				if (active) {
					var _val = _toKatakana(baseKana + values.join(''));
					elKana.val(_val).change();
				}
			}
		};
		function _stateClear() {
			baseKana = '';
			flagConvert = false;
			ignoreString = '';
			input = '';
			values = [];
		};
		function _stateInput() {
			baseKana = elKana.val();
			flagConvert = false;
			ignoreString = elName.val();
		};
		function _stateConvert() {
			baseKana = baseKana + values.join('');
			flagConvert = true;
			values = [];
		};
		function _toKatakana(src) {
			if (options.katakana) {
				var c, i, str;
				str = new String;
				for (i = 0; i < src.length; i++) {
					c = src.charCodeAt(i);
					if (_isHiragana(c)) {
						str += String.fromCharCode(c + 96);
					} else {
						str += src.charAt(i);
					}
				}
				return str;
			} else {
				return src;
			}
		}
	};
})(jQuery);