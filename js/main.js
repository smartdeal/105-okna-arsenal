$(document).ready(function() {

// Вешаем ajax-отправку при клике на активную кнопку отправки
$('form').each(function() {
    var form = $(this);
    var btn = form.find('.send-btn');

    form.find('.required').addClass('empty_filed');

    function checkField() {
        form.find('.required').each(function() {
            if($(this).val() != ''){
                $(this).removeClass('empty_filed');
            } else {
                $(this).addClass('empty_filed');
            }
        });
    }; // checkField

    setInterval(function() {
        checkField();
        var sizeEmpty = form.find('.empty_filed').size();
        // console.log(sizeEmpty);
        if(sizeEmpty > 0) {
            if(btn.hasClass('disable-button')) {
                return false;
            } else {
                btn.addClass('disable-button');
            };
        } else {
            btn.removeClass('disable-button');
            btn.attr('disabled', false);
        }
    }, 500); // setInterval

    function lightEmpty() {
        form.find('.empty_filed').addClass('field_error');
        setTimeout(function() {
            form.find('.empty_filed').removeClass('field_error');
        }, 500);
    }; // lightEmpty

    btn.click(function() {
        var cur_btn = $(this);
        if(cur_btn.hasClass('disable-button') || (cur_btn.parent().find('.f-tel').val().length < 1)) {
            lightEmpty();
            // if(cur_btn.parent().find('.f-tel').hasClass('empty_filed')) {
            //     cur_btn.parent().find('.f-tel').focus();
            // }             
            return false;
        } else {
            var message = form.serialize();
            $.ajax({
                url: 'send.php',
                type: 'post',
                data: message,
                error: function(errorThrown) {
                    console.log( errorThrown );
                },
                success: function(response) {
                    if(response == 'success') {
                        $('.form-popup, .form-popup-dog').hide();
                        if (cur_btn.hasClass('open-dog')) {
                            $('.popup, .popup-success-dog').fadeIn(); 
                        }
                        else {
                            $('.popup, .popup-success').fadeIn();
                        }
                        form.trigger('reset');
                    } else {
                        alert(response);
                    }   
                } // function response
            }); // ajax           
        }; // if/else
        return false;
    }); // click
}); // each

$(".fancybox").fancybox();
$(".f-tel").mask("8(999) 999-99-99");

//$(".form-popup, .form-calc, .f-rehau, .f-zamer").append("<input type='hidden' name='ref' value='"+referer+"'/><input type='hidden' name='utm_source' value='"+utm_source+"'/><input type='hidden' name='utm_medium' value='"+utm_medium+"'/><input type='hidden' name='utm_campaign' value='"+utm_campaign+"'/><input type='hidden' name='block' value='"+block+"'/><input type='hidden' name='utm_term' value='"+utm_term+"'/><input type='hidden' name='utm_content' value='"+utm_content+"'/><input type='hidden' name='position' value='"+position+"'/><input type='hidden' name='keyword' value='"+keyword+"'/>");

$(".closepopup, .ok-btn").click(function(){
    $(".dark, .popup, .popup-success, .popup-error, .form-popup, .polit-popup").hide();
});

// When click the button open popup 
$('.open-form').click(function() {
    $('.popup, .dark').show();
    $('.form-popup').show();
});

$('.open-polit').click(function() {
    $('.popup, .dark').show();
    $('.polit-popup').show();
});

$('.btn-open-dog').click(function() {
    $('.popup, .dark').show();
    $('.form-popup-dog').show();
});

$('.b-why-imgs .thmb-item').click(function() {
    var cur = $(this).css('background-image');
    var cur_txt = $(this).find('.txt').text();
    $('.b-why-imgs .thmb-item').removeClass('active');
    $(this).addClass('active');
    $('.b-why-imgs .big-img').css({'background':cur+' center no-repeat','background-size':'cover'});
    $('.b-why-txt').text(cur_txt);
});

var b_why_cur_big_img = $('.b-why-imgs .thmb-item').first().css('background-image');
var b_why_cur_txt = $('.b-why-imgs .thmb-item:first-child .txt').text();
$('.b-why-imgs .big-img').css({'background':b_why_cur_big_img+' center no-repeat','background-size':'cover'});
$('.b-why-txt').text(b_why_cur_txt);

var cur_btn_more_text = $('.s-rev .btn-more').first().text();
$('.s-rev .btn-more').click(function() {
    if ($('.b-rev-more').hasClass('opened')) {
        $('.b-rev-more').removeClass('opened');
        $(this).text(cur_btn_more_text);
    } else {
        $('.b-rev-more').addClass('opened');
        $(this).text('Скрыть');
    }
    var cur = slider_rev.getCurrentSlide();
    slider_rev.reloadSlider();
    slider_rev.goToSlide(cur);
});

(function() {
  
  $(".panel").on("show.bs.collapse hide.bs.collapse", function(e) {
    if (e.type=='show'){
      $(this).addClass('active');
    }else{
      $(this).removeClass('active');
    }
  });  

}).call(this);

$('.btn-more').click(function() {
    $(this).next('.more').addClass('opened');
    $(this).parentsUntil('.section').find('.bx-controls-direction').addClass('down');
});

var cur_btn_more_soot_text = $('.btn-more-soot').text()
$('.btn-more-soot').click(function() {
    var more_soot = $(this).next('.more-soot');
    if (more_soot.hasClass('opened')) {more_soot.removeClass('opened'); $(this).text(cur_btn_more_soot_text)}
        else {more_soot.addClass('opened'); $(this).text('Свернуть таблицу')}
});

$('.more').click(function() {
    $(this).removeClass('opened');
    $(this).parentsUntil('.section').find('.bx-controls-direction').removeClass('down');
});

var checkWidth = $(window).width();
var checkHeight = $(window).height();
if (checkWidth > 750) {
    var s_vid_max_slides = 2;
} else {
    $('.b-spectr, .b-adv-list, .b-sert, .b-types-list').lightSlider({
            item:1,
            loop:true,
    });
}
// $(window).resize(size());
if (checkWidth < 975) {

}

// rasik privet
    
$('.b-bull-list').lightSlider({
        item:3,
        loop:true,
        slideMove:1,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        responsive : [
            {
                breakpoint:992,
                settings: {
                    item:3,
                    slideMove:3,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:768,
                settings: {
                    item:2,
                    slideMove:2,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]    
});

$('.b-reviews-list').lightSlider({
        item:1,
        loop:true,
});

$(".polit-popup").css('height', checkHeight*.7);




// $(window).scroll(function(){
//         if( $(window).scrollTop() > 60 ) {
//                 $('#stickyheader').css('display', 'block');
//         } else {
//                 $('#stickyheader').css('display', 'none');
//         }
// });

// $("#stickyheader").on("click","a", function (event) {
//     event.preventDefault();
//     var id  = $(this).attr('href'),
//         top = $(id).offset().top-30;
//     $('body,html').animate({scrollTop: top}, 1000);
// });

});
