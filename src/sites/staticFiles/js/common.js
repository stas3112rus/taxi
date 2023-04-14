var startHeight = $('.hidden-text-more').height();
$('.hidden-text-more').css('max-height', 0);

$('.text-description .wbutton').click(function () {
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








	$('.box-item').slick({
		dots: true,
	})
});


flatpickr(".flatpickr", {
        enableTime: true,
        disableMobile: true,
        altFormat: "F j, Y h:i K"
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
 new WOW().init();





$(window).resize(function () {
        if( $(window).width() <= 1024 ){
           $(".scroll_header #nav-toggle").click(function () {
    

        if( $('.scroll_header .nav-collapse').is(":visible") ){
            $('.scroll_header .nav-collapse').fadeOut();
            
        }else{
           // $('.scroll_header .nav-collapse').fadeIn();
        }
        $('.scroll_header .menu-item a').click(function () {
                $('.scroll_header .nav-collapse').fadeOut();
            });
    }); 
        }
    });

    $("#nav-toggle").click(function () {
    

        if( $('.nav-collapse').is(":visible") ){
            $('.nav-collapse').fadeOut();

        }else{
            //$('.nav-collapse').fadeIn();
        }
        $('.nav-collapse li a').click(function () {
                $('.nav-collapse').fadeOut();
            });
    });






    $(".contact_form").submit(function(){ // пeрeхвaтывaeм всe при сoбытии oтпрaвки
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



$(document).ready(function(){
	$(".menuMenu").on("click","a", function (event) {

		var headerBlock = $('.scrollMenu').height();
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top - headerBlock;
		
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1500);
	});
});


$('.toggle-scroll-btn').click(function(){
  $('.wrp-menu-toggle').fadeIn();
})

$('.menu-toggle .wrapper .btn-close').click(function(){
  $('.wrp-menu-toggle').fadeOut();
})
$('.menu-toggle .menu-item').click(function(){
  $('.wrp-menu-toggle').fadeOut();
})