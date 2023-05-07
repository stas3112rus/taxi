jQuery(window).load(function() {
    "use strict";
    // loader fade out
    jQuery(".loader").fadeOut();
    // fade out div that covers website
    jQuery(".load").delay(1000).fadeOut("slow");
})

$(document).ready(function() {

    "use strict";
    flatpickr(".flatpickr", {
        enableTime: true,
        disableMobile: true,
        altFormat: "F j, Y h:i K"
    });
    // Navigation
    $('body').scrollspy({
        target: '#minify_nav',
        offset: 100
    });

    $('a[href^="#"]:not([href="#"]), .scroll').on('click', function(event) {

        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 60
        }, 1500);
        $(".wrp-popup").fadeOut()
        event.preventDefault();
    });

    $(window).on("scroll touchmove", function () {
        $('#minify_nav').toggleClass('mini-nav', $(document).scrollTop() > 60);
    });

    // Form Submit Validations
    $.validator.addMethod("valueNotZero", function(value, element, arg){
        return value != 0;
    }, "select an option.");


    var validator =  $(".ajaxform").validate({
        debug: false,
        ignore: [],
          rules: {
                    name: {
                         required: true
                    },
                    number: {
                         required: true,
                         number:true,
                         maxlength:15,
                         minlength:6
                    },
                    email: {
                         required: true,
                         email:true
                    },
                    message: {
                         required: true
                    },
                    color:{
                        valueNotZero: true
                    }
                },
    submitHandler: function(form) {
            // form.submit();
            ajaxsubmit(form);
        }

 });


 function ajaxsubmit (form){
        // event.preventDefault();
        var url = $(form).attr('action');
        var data = $( form ).serialize();
        // alert('data = ' + data);
        $.ajax({
              type: "POST",
              url: url,
              data: data,
              success: success,
              dataType: 'text'
            });
    };

    function success(a){
        // alert(a);
        if(a == 1){
                $('.email-success-text').removeClass('hide');
        }else if(a == 0){
                $('.email-error-text').removeClass('hide');
        }
        var clear = setInterval(function(){
            $('.email-success-text').addClass('hide');
            $('.email-error-text').addClass('hide');
             $('form.ajaxform').trigger("reset");
                clearInterval(clear);
        },4000);
    };

});

// wow animation integration
// ===============================================
var wow = new WOW(
{
    mobile: false
});
wow.init();

// Statistics Counter
// ===============================================
$('.count').counterUp({
    delay: 10,
    time: 1000
});

//  testimonial carousel
// ===============================================
$('.testimonial-carousel').owlCarousel({
    items: 1,
    animateIn: 'slideInRight',
    animateOut: 'fadeOutDown',
    loop: true,
    margin: 10,
    autoplay:true,
});

// tour packages carousel
// ===============================================
$('.tour-packages').owlCarousel({
    margin: 25,
    autoplay: true,
    loop: true,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items:1,
            nav: false
        },
        768: {
            items:2,
            nav: false
        },
        1000: {
            items:3,
            nav: false
        }
    }
});

// mobile app screenshot carousel
// ===============================================
$('.app-screenshot').owlCarousel({
    margin: 20,
    autoplay: true,
    loop: true,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items:1,
            nav: false
        },
        768: {
            items:2,
             nav: false
        },
        1000: {
            items:4,
            nav: false
        }
    }
});

// countdown timer
// ===============================================
$('#timer').countdown('2017/12/11 00:00:00') /* change here your "countdown to" date */

.on('update.countdown', function(event) {
    var format = '<li><span class="h2 f-w-700 no-m-b">%D</span><h4>Days</h4></li><li><span class="h2 f-w-700 no-m-b">%H</span><h4>Hours</h4></li><li><span class="h2 f-w-700 no-m-b">%M</span><h4>Min</h4></li><li><span class="h2 f-w-700 no-m-b">%S</span><h4>Sec</h4></li>';
    
    
    $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
$(this).html('This offer has expired!')
    .parent().addClass('disabled');
});

// nivo lightbox
// ===============================================
$('#screenshots a').nivoLightbox({
    effect: 'fadeScale',
});

// Mailchimp form integration
// ===============================================
$('.newsletter-signup').ajaxChimp({
    callback: mailchimpCallback,
    url: "https://roziek.us16.list-manage.com/subscribe/post?u=24b48b89dd987bacb21b24469&amp;id=1a02369eae"
});

function mailchimpCallback(resp) {
     if (resp.result === 'success') {
        $('.email-success-text').html(resp.msg).fadeIn(1000);
        $('.email-error-text').fadeOut(1000);
        
    } else if(resp.result === 'error') {
        $('.email-error-text').html(resp.msg).fadeIn(1000);
        $('.email-success-text').fadeOut(1000);
    }
}



var startHeight = $('.hidden-text-more').height();
$('.hidden-text-more').css('max-height', 0);

$(' .wbutton').click(function (e) {
    e.preventDefault();
    $('.hidden-text-more').animate({
        maxHeight: startHeight,
        opacity: 1,
        zIndex: 1
    }, 500);

    $(this).fadeOut();
});

$(document).ready(function() {
    $('.popup-with-form').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#name',

        // When elemened is focused, some mobile browsers in some cases zoom in
        // It looks not nice, so we disable it:
        callbacks: {
            beforeOpen: function() {
                if($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });
    var magnificPopup = $.magnificPopup.instance;
    $('.close-form').click(function(){
        magnificPopup.close()
    });

    $(".contact_form").submit(function(){ // пeрeхвaтывaeм всe при сoбытии oтпрaвки
        var form = $(this); // зaпишeм фoрму, чтoбы пoтoм нe былo прoблeм с this
        var error = false; // прeдвaритeльнo oшибoк нeт
        
        if (!error) { // eсли oшибки нeт
            var data = form.serialize(); // пoдгoтaвливaeм дaнныe
            $.ajax({ // инициaлизируeм ajax зaпрoс
               type: 'POST', // oтпрaвляeм в POST фoрмaтe
               url: '/mail.php', // путь дo oбрaбoтчикa
               dataType: 'json', // oтвeт ждeм в json фoрмaтe
               data: data, // дaнныe для oтпрaвки
               beforeSend: function(data) { // сoбытиe дo oтпрaвки
                    form.find('input[type="submit"]').attr('disabled', 'disabled'); // oтключим кнoпку, чтoбы нe жaли пo 100 рaз
                  },
               success: function(data){ // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
                    if (data['error']) { // eсли oбрaбoтчик вeрнул oшибку
                        alert('Произошла ошибка во время отправки. Попробуйте позже.');
                        console.log(data['error']); // пoкaжeм eё тeкст
                    } else { // eсли всe прoшлo oк
                        alert('Заявка отправлена!'); // пишeм чтo всe oк
                    }
                 },
               error: function (xhr, ajaxOptions, thrownError) { // в случae нeудaчнoгo зaвeршeния зaпрoсa к сeрвeру
                    console.log(xhr.status); // пoкaжeм oтвeт сeрвeрa
                    console.log(thrownError); // и тeкст oшибки
                 },
               complete: function(data) { // сoбытиe пoслe любoгo исхoдa
                    form.find('input[type="submit"]').prop('disabled', false); // в любoм случae включим кнoпку oбрaтнo
                 }
                          
                 });
        }
        return false; // вырубaeм стaндaртную oтпрaвку фoрмы
    });
    $(".footer_form").submit(function() { // пeрeхвaтывaeм всe при сoбытии oтпрaвки
    var form = $(this); // зaпишeм фoрму, чтoбы пoтoм нe былo прoблeм с this
    var error = false; // прeдвaритeльнo oшибoк нeт

    if (!error) { // eсли oшибки нeт
        var data = form.serialize(); // пoдгoтaвливaeм дaнныe
        $.ajax({ // инициaлизируeм ajax зaпрoс
            type: 'POST', // oтпрaвляeм в POST фoрмaтe
            url: '/mail-2.php', // путь дo oбрaбoтчикa
            dataType: 'json', // oтвeт ждeм в json фoрмaтe
            data: data, // дaнныe для oтпрaвки
            beforeSend: function(data) { // сoбытиe дo oтпрaвки
                form.find('input[type="submit"]').attr('disabled', 'disabled'); // oтключим кнoпку, чтoбы нe жaли пo 100 рaз
            },
            success: function(data) { // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
                if (data['error']) { // eсли oбрaбoтчик вeрнул oшибку
                    alert('Произошла ошибка во время отправки. Попробуйте позже.');
                    console.log(data['error']); // пoкaжeм eё тeкст
                } else { // eсли всe прoшлo oк
                    alert('Заявка отправлена!'); // пишeм чтo всe oк
                }
            },
            error: function(xhr, ajaxOptions, thrownError) { // в случae нeудaчнoгo зaвeршeния зaпрoсa к сeрвeру
                console.log(xhr.status); // пoкaжeм oтвeт сeрвeрa
                console.log(thrownError); // и тeкст oшибки
            },
            complete: function(data) { // сoбытиe пoслe любoгo исхoдa
                form.find('input[type="submit"]').prop('disabled', false); // в любoм случae включим кнoпку oбрaтнo
            }

        });
    }
    return false; // вырубaeм стaндaртную oтпрaвку фoрмы
});

    $('.navbar-toggle').click(function(){
        $(".wrp-popup").fadeIn()
    });

    $('.close').click(function(){
        $(".wrp-popup").fadeOut()
    });

});