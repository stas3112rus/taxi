jQuery(document).ready(function($) {
    

    $('nav ul').singlePageNav({
        filter: ':not(.extra)',
        offset: 50
    });

    

    $(window).resize(function () {
        if( $(window).width() <= 1024 ){
           $(".scroll_header #nav-toggle").click(function () {
    

        if( $('.scroll_header .nav-collapse').is(":visible") ){
            $('.scroll_header .nav-collapse').fadeOut();
            
        }else{
            $('.scroll_header .nav-collapse').fadeIn();
        }
        $('.scroll_header .menu-item a').click(function () {
                $('.scroll_header .nav-collapse').fadeOut();
            });
    }); 
        }
    });

    $(".scrollMenu #nav-toggle").click(function () {
    

        if( $('.scrollMenu .nav-collapse').is(":visible") ){
            $('.scrollMenu .nav-collapse').fadeOut();

        }else{
            $('.scrollMenu .nav-collapse').fadeIn();
        }
        $('.scrollMenu .nav-collapse li a').click(function () {
                $('.scrollMenu .nav-collapse').fadeOut();
            });
    });


    $(window).on('scroll', function() {
        var b = $(window).scrollTop();
        if (b > 138) {
            
        $(".scroll_header").css('opacity', "0");
        $(".scrollMenu").css('opacity', "100").addClass('animated fadeInDown').fadeIn();
        

        } else {
            $(".scroll_header").css('opacity', "100");;
            $(".scrollMenu").removeClass('animated fadeInDown').css('display', "none");
        }
    });


    $("#before-after").twentytwenty({
        default_offset_pct: 0.3
    });
    if ((".loader").length) {
        $(window).on('load', function() {
            $(".loader").fadeOut("fast");
        });
    }
    $("#back-top").hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#back-top').fadeIn();
        } else {
            $('#back-top').fadeOut();
        }
    });
    $(' a #back-top').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    setHeight('.equal_height_columns');
    var maxHeight = 0;

    function setHeight(column) {
        column = $(column);
        column.each(function() {
            if ($(this).height() > maxHeight) {
                maxHeight = $(this).height();;
            }
        });
        column.height(maxHeight);
    }
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        nav: false,
        loop: true,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            360: {
                items: 1
            },
            768: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
    $('.rewiev_about_us').owlCarousel({
        loop: true,
        margin: 200,
        dots: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 40,
                nav: false
            },
            768: {
                items: 1,
                margin: 100,
                stagePadding: 200,
                nav: false
            },
            1025: {
                items: 1,
                stagePadding: 400
            }
        }
    })
    $('.quote_slider').owlCarousel({
        dots: true,
        loop: true,
        nav: false,
        items: 1
    })
    $('.home-slider').owlCarousel({
        dots: true,
        loop: true,
        nav: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true
    })
    $('.home_v4').owlCarousel({
        dots: false,
        autoHeight: false,
        nav: true,
        loop: true,
        items: 1
    })
    $('.testimonials').owlCarousel({
        dots: true,
        autoHeight: false,
        nav: false,
        loop: true,
        items: 1
    })
    $('.accordion_title').click(function() {
        $(this).toggleClass('active').next().slideToggle(300);
    });
    $('.count').counterUp({
        delay: 10,
        time: 2000
    });
    $(".tab_content").hide();
    $(".tab_content:first").show();
    
    $("ul.tabs li").click(function() {
        $(".tab_content").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn();
        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");
        $(".tab_drawer_heading").removeClass("d_active");
        $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");
    });


    $(".tab_drawer_heading").click(function() {
        $(".tab_content").hide();
        var d_activeTab = $(this).attr("rel");
        $("#" + d_activeTab).fadeIn();
        $(".tab_drawer_heading").removeClass("d_active");
        $(this).addClass("d_active");
        $("ul.tabs li").removeClass("active");
        $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
    });

    
    $('ul.tabs li').last().addClass("tab_last");
    $('.gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        callbacks: {
            change: function() {
                if (this.isOpen) {
                    this.wrap.addClass('mfp-open');
                }
            },
            beforeOpen: function() {
                this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                this.st.mainClass = this.st.el.attr('data-effect');
            }
        },
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });
    $('.popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username'
    });
    $(document).on('click', '.popup-modal-dismiss', function(e) {
        e.preventDefault();
        $.magnificPopup.close();
    });
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
    $('.simple-ajax-popup').magnificPopup({
        type: 'ajax'
    });
    timer();

    function timer() {
        var now = new Date();
        var newDate = new Date("January,11,2019 23:59:59");
        var totalRemains = (newDate.getTime() - now.getTime());
        if (totalRemains > 1) {
            var Days = (parseInt(parseInt(totalRemains / 1000) / (24 * 3600)));
            var Hours = (parseInt((parseInt(totalRemains / 1000) - Days * 24 * 3600) / 3600));
            var Min = (parseInt(parseInt((parseInt(totalRemains / 1000) - Days * 24 * 3600) - Hours * 3600) / 60));
            var Sec = parseInt((parseInt(totalRemains / 1000) - Days * 24 * 3600) - Hours * 3600) - Min * 60;
            if (Days < 10) {
                Days = "0" + Days
            }
            if (Hours < 10) {
                Hours = "0" + Hours
            }
            if (Min < 10) {
                Min = "0" + Min
            }
            if (Sec < 10) {
                Sec = "0" + Sec
            }
            $(".day").each(function() {
                $(this).text(Days);
            });
            $(".hour").each(function() {
                $(this).text(Hours);
            });
            $(".min").each(function() {
                $(this).text(Min);
            });
            $(".sec").each(function() {
                $(this).text(Sec);
            });
            setTimeout(timer, 1000);
        }
    }
    flatpickr(".flatpickr", {
        enableTime: true,
        disableMobile: true,
        altFormat: "F j, Y h:i K"
    });
    /*$("#submit_btn").click(function() {
        var proceed = true;
        $("#contact_form select[required=true], #contact_form input[required=true], #contact_form textarea[required=true]").each(function() {
            $(this).css('border-color', '');
            if (!$.trim($(this).val())) {
                $(this).css('border-color', 'red');
                proceed = false;
            }
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if ($(this).attr("type") == "email" && !email_reg.test($.trim($(this).val()))) {
                $(this).css('border-color', 'red');
                proceed = false;
            }
        });
        if (proceed) {
            post_data = {
                'user_data': $('#contact_form input[name=data]').val(),
                'user_name': $('#contact_form input[name=name]').val(),
                'user_email': $('#contact_form input[name=email]').val(),
                'phone_number': $('#contact_form input[name=phone]').val(),
                'subject': $('#contact_form select[name=subject]').val(),
                'msg': $('#contact_form textarea[name=message]').val()
            };
            $.post('../php/contact-full-function.php', post_data, function(response) {
                if (response.type == 'error') {
                    output = '<div class="error">' + response.text + '</div>';
                } else {
                    $("#contact_form select[required=true], #contact_form  input[required=true], #contact_form textarea[required=true]").val('');
                    $("#contact_form #contact_body").slideUp();
                    output = '<div class="success">' + response.text + '</div>';
                    $("#contact_form select[required=true], #contact_form  input[required=true], #contact_form textarea[required=true]").val('');
                    $("#contact_form #contact_body").fadeOut();
                }
                $("#contact_form #contact_results").hide().html(output).slideDown();
            }, 'json');
        }
    });*/

    $("#contact_form").submit(function(){ // пeрeхвaтывaeм всe при сoбытии oтпрaвки
        var form = $(this); // зaпишeм фoрму, чтoбы пoтoм нe былo прoблeм с this
        var error = false; // прeдвaритeльнo oшибoк нeт
        
        if (!error) { // eсли oшибки нeт
            var data = form.serialize(); // пoдгoтaвливaeм дaнныe
            $.ajax({ // инициaлизируeм ajax зaпрoс
               type: 'POST', // oтпрaвляeм в POST фoрмaтe
               url: 'php/contact-full-function.php', // путь дo oбрaбoтчикa
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

     $("#contact_form_2").submit(function(){ // пeрeхвaтывaeм всe при сoбытии oтпрaвки
        var form = $(this); // зaпишeм фoрму, чтoбы пoтoм нe былo прoблeм с this
        var error = false; // прeдвaритeльнo oшибoк нeт
        
        if (!error) { // eсли oшибки нeт
            var data = form.serialize(); // пoдгoтaвливaeм дaнныe
            $.ajax({ // инициaлизируeм ajax зaпрoс
               type: 'POST', // oтпрaвляeм в POST фoрмaтe
               url: 'php/contact-full-function.php', // путь дo oбрaбoтчикa
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













/*
    $("#contact_form select[required=true], #contact_form input[required=true], #contact_form textarea[required=true]").keyup(function() {
        $(this).css('border-color', '');
        $("#contact_results").fadeOut();
    });
    $("#submit_btn").click(function(e) {
        e.preventDefault();
    });
    $("#submit_btn_2").click(function() {
        var proceed = true;
        $("#contact_form_2 select[required=true], #contact_form_2 input[required=true], #contact_form_2 textarea[required=true]").each(function() {
            $(this).css('border-color', '');
            if (!$.trim($(this).val())) {
                $(this).css('border-color', 'red');
                proceed = false;
            }
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if ($(this).attr("type") == "email" && !email_reg.test($.trim($(this).val()))) {
                $(this).css('border-color', 'red');
                proceed = false;
            }
        });
        if (proceed) {
            post_data = {
                'user_data': $('#contact_form_2 input[name=data]').val(),
                'user_name': $('#contact_form_2 input[name=name]').val(),
                'user_email': $('#contact_form_2 input[name=email]').val(),
                'phone_number': $('#contact_form_2 input[name=phone]').val(),
                'subject': $('#contact_form_2 select[name=subject]').val(),
                'msg': $('#contact_form_2 textarea[name=message]').val()
            };
            $.post('../php/contact-full-function.php', post_data, function(response) {
                if (response.type == 'error') {
                    output = '<div class="error">' + response.text + '</div>';
                } else {
                    $("#contact_form select[required=true], #contact_form  input[required=true], #contact_form textarea[required=true]").val('');
                    $("#contact_form_2 #contact_body_2").slideUp();
                    output = '<div class="success">' + response.text + '</div>';
                    $("#contact_form_2 select[required=true], #contact_form_2  input[required=true], #contact_form_2 textarea[required=true]").val('');
                    $("#contact_form_2 #contact_body_2").fadeOut();
                }
                $("#contact_form_2 #contact_results_2").hide().html(output).slideDown();
            }, 'json');
        }
    });
    $("#contact_form_2 select[required=true], #contact_form_2 input[required=true], #contact_form_2 textarea[required=true]").keyup(function() {
        $(this).css('border-color', '');
        $("#contact_results_2").fadeOut();
    });
    $("#submit_btn_2").click(function(e) {
        e.preventDefault();
    });
    $("#submit_btn_3").click(function() {
        var proceed = true;
        $("#contact_form_3 input[required=true], #contact_form_3 textarea[required=true]").each(function() {
            $(this).css('border-color', '');
            if (!$.trim($(this).val())) {
                $(this).css('border-color', 'red');
                proceed = false;
            }
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if ($(this).attr("type") == "email" && !email_reg.test($.trim($(this).val()))) {
                $(this).css('border-color', 'red');
                proceed = false;
            }
        });
        if (proceed) {
            post_data = {
                'user_name': $('#contact_form_3 input[name=name]').val(),
                'user_email': $('#contact_form_3 input[name=email]').val(),
                'phone_number': $('#contact_form_3 input[name=phone]').val(),
                'subject': $('#contact_form_3 select[name=subject]').val(),
                'msg': $('#contact_form_3 textarea[name=message]').val()
            };
            $.post('./php/contact.php', post_data, function(response) {
                if (response.type == 'error') {
                    output = '<div class="error">' + response.text + '</div>';
                } else {
                    output = '<div class="success">' + response.text + '</div>';
                    $("#contact_form_3  input[required=true], #contact_form_3 textarea[required=true]").val('');
                    $("#contact_form_3 #contact_body_3").fadeOut("fast");
                }
                $("#contact_form_3 #contact_results_3").hide().html(output).slideDown();
            }, 'json');
        }
    });
    $("#contact_form_3  input[required=true], #contact_form_3 textarea[required=true]").keyup(function() {
        $(this).css('border-color', '');
        $("#contact_results_3").fadeOut("fast");
    });
    $("#submit_btn_3").click(function(e) {
        e.preventDefault();
    });
    var allowed_file_size = "20048576";
    var allowed_files = ['image/png', 'image/gif', 'image/jpeg', 'image/pjpeg'];
    var border_color = "red";
    $("#contact_body_4").submit(function(e) {
        e.preventDefault();
        proceed = true;
        $($(this).find("input[data-required=true], textarea[data-required=true]")).each(function() {
            if (!$.trim($(this).val())) {
                $(this).css('border-color', 'red');
                proceed = false;
            }
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if ($(this).attr("type") == "email" && !email_reg.test($.trim($(this).val()))) {
                $(this).css('border-color', 'red');
                proceed = false;
            }
        }).on("input", function() {
            $(this).css('border-color', border_color);
        });
        if (window.File && window.FileReader && window.FileList && window.Blob) {
            var total_files_size = 0;
            $(this.elements['file_attach[]'].files).each(function(i, ifile) {
                if (ifile.value !== "") {
                    if (allowed_files.indexOf(ifile.type) === -1) {
                        alert(ifile.name + " is unsupported file type!");
                        proceed = false;
                    }
                    total_files_size = total_files_size + ifile.size;
                }
            });
            if (total_files_size > allowed_file_size) {
                alert("Make sure total file size is less than 20 MB!");
                proceed = false;
            }
        }
        if (proceed) {
            var post_url = $(this).attr("action");
            var request_method = $(this).attr("method");
            var form_data = new FormData(this);
            $.ajax({
                url: post_url,
                type: request_method,
                data: form_data,
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false
            }).done(function(res) {
                if (res.type == "error") {
                    $("#contact_results_4").html('<div class="error">' + res.text + "</div>");
                }
                if (res.type == "done") {
                    $("#contact_results_4").html('<div class="success">' + res.text + "</div>");
                    $("#contact_body_4").hide().html(output).slideDown();
                }
            });
        }
    });
    (function(e, t, n) {
        var r = e.querySelectorAll("html")[0];
        r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
    })(document, window, 0);
    var inputs = document.querySelectorAll('.inputfile');
    Array.prototype.forEach.call(inputs, function(input) {
        var label = input.nextElementSibling,
            labelVal = label.innerHTML;
        input.addEventListener('change', function(e) {
            var fileName = '';
            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else
                fileName = e.target.value.split('\\').pop();
            if (fileName)
                label.querySelector('span').innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });
    });*/
    
});


$(document).ready(function() {
  $('.popup-polit').magnificPopup({
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
  
 
});

//////////////////////////

var dateArr = [
    {
        text: '11 января',
        element: $('.text')
    },

    {
        text: '11.01.2019',
        element: $('.text2')
    }
];

function setText(text) {
    text.forEach(function (item, i, arr) {
        $(item.element).text(item.text);
    });
}

$(document).ready(function() { 
    setText(dateArr);
});