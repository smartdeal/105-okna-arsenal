$(document).ready(function(){function e(){function e(e){$(window).width()<768&&$(".s-hello .b-hello-more").fadeOut()}var o=$(".b-spectr, .b-adv-list, .b-sert, .b-types-list, .b-services-list"),t=$("#owl-hello");$(window).width()<768?(o.owlCarousel({items:1,loop:!0,nav:!0}),t.owlCarousel({items:1,loop:!0,nav:!0,onChanged:e})):(o.trigger("destroy.owl.carousel"),t.trigger("destroy.owl.carousel")),$(".polit-popup").css("height",.7*$(window).height())}$("form").each(function(){function e(){t.find(".required").each(function(){""!=$(this).val()?$(this).removeClass("empty_filed"):$(this).addClass("empty_filed")})}function o(){t.find(".empty_filed").addClass("field_error"),setTimeout(function(){t.find(".empty_filed").removeClass("field_error")},500)}var t=$(this),s=t.find(".send-btn");t.find(".required").addClass("empty_filed"),setInterval(function(){e();var o=t.find(".empty_filed").size();if(o>0){if(s.hasClass("disable-button"))return!1;s.addClass("disable-button")}else s.removeClass("disable-button"),s.attr("disabled",!1)},500),s.click(function(){var e=$(this);if(e.hasClass("disable-button")||e.parent().find(".f-tel").val().length<1)return o(),!1;var s=t.serialize();return $.ajax({url:"send.php",type:"post",data:s,error:function(e){console.log(e)},success:function(o){"success"==o?($(".form-popup, .form-popup-dog").hide(),e.hasClass("open-dog")?$(".popup, .popup-success-dog").fadeIn():$(".popup, .popup-success").fadeIn(),t.trigger("reset")):alert(o)}}),!1})}),$(".fancybox").fancybox(),$(".f-tel").mask("8(999) 999-99-99"),$(".closepopup, .ok-btn").click(function(){$(".dark, .popup, .popup-success, .popup-error, .form-popup, .polit-popup").hide()}),$(".open-form").click(function(){$(".popup, .dark").show(),$(".form-popup").show()}),$(".open-polit").click(function(){$(".popup, .dark").show(),$(".polit-popup").show()}),$(".btn-open-dog").click(function(){$(".popup, .dark").show(),$(".form-popup-dog").show()}),$(".b-why-imgs .thmb-item").click(function(){var e=$(this).css("background-image"),o=$(this).find(".txt").text();$(".b-why-imgs .thmb-item").removeClass("active"),$(this).addClass("active"),$(".b-why-imgs .big-img").css({background:e+" center no-repeat","background-size":"cover"}),$(".b-why-txt").text(o)});var o=$(".b-why-imgs .thmb-item").first().css("background-image"),t=$(".b-why-imgs .thmb-item:first-child .txt").text();$(".b-why-imgs .big-img").css({background:o+" center no-repeat","background-size":"cover"}),$(".b-why-txt").text(t);var s=$(".s-rev .btn-more").first().text();$(".s-rev .btn-more").click(function(){$(".b-rev-more").hasClass("opened")?($(".b-rev-more").removeClass("opened"),$(this).text(s)):($(".b-rev-more").addClass("opened"),$(this).text("Скрыть"));var e=slider_rev.getCurrentSlide();slider_rev.reloadSlider(),slider_rev.goToSlide(e)}),function(){$(".panel").on("show.bs.collapse hide.bs.collapse",function(e){"show"==e.type?$(this).addClass("active"):$(this).removeClass("active")})}.call(this),$("#owl-hello [data-toggle=tab]").click(function(){$("#owl-hello [data-toggle=tab]").removeClass("active"),$(this).addClass("active"),$(window).width()<768&&$(".b-hello-more").toggle()}),$(".btn-more").click(function(){$(this).next(".more").addClass("opened"),$(this).parentsUntil(".section").find(".bx-controls-direction").addClass("down")});var i=$(".btn-more-soot").text();$(".btn-more-soot").click(function(){var e=$(this).next(".more-soot");e.hasClass("opened")?(e.removeClass("opened"),$(this).text(i)):(e.addClass("opened"),$(this).text("Свернуть таблицу"))}),$(".b-bull-list").owlCarousel({items:1,loop:!0,nav:!0,responsive:{768:{items:2,slideMove:2,slideMargin:6},992:{items:3,slideMove:3,slideMargin:6}}}),$(".b-how-many-list").owlCarousel({items:1,loop:!0,nav:!0}),$(".b-reviews-list").owlCarousel({items:1,loop:!0,nav:!0,autoHeight:!0}),$(window).ready(e),$(window).resize(e),$(window).scroll(function(){$(window).scrollTop()>60?$("#stickyheader").css("display","block"):$("#stickyheader").css("display","none")}),$("#stickyheader").on("click","a",function(e){e.preventDefault();var o=$(this).attr("href"),t=$(o).offset().top-30;$("body,html").animate({scrollTop:t},1e3)})});