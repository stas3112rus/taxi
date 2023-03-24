
        $(document).ready(function() {
            $('form').submit(function(event)
            {
                var phon = $(this).find("input[name='phone']").val();
                
            });
            Inputmask.extendDefinitions({

                '~': {
                    validator: "[1245679]"
                }

            });
            $("input[name='name']").on("keypress", function (e) {
                return (/[A-Za-zА-Яа-яЁё\s]/.test(String.fromCharCode(e.charCode)));
            })
            $("input[name='phone']").inputmask({
                mask: "+7 (~99) 999-99-99",
                greedy: false,
                clearIncomplete: true,
                placeholder: "_",
                rightAlign: false,
                showMaskOnHover: false,
                showMaskOnFocus: true
            });
            $("input[name='phone']").on("keydown", function (e) {

                if(e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40){
                    e.preventDefault();
                    return false;
                }

            });


        });


	$(document).on('click', '.navigation-link', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 60
    }, 500);
});


	jQuery('.menu-types').on('click','a',function(){var el=jQuery(this);el.addClass('active').siblings('.active').removeClass('active');el.parent().find('.type-value').val(el.html());return false;});
	
	 $("#sel-car").change(function(e) {
            $("input[name='car']").val(e.target.value);
        });
        
        	$(document).ready(function(){
    const slider = $("#slider").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:2
            },
            767:{
                items:3
            },
            1000:{
                items:4
            },
             1200:{
                items:5
            }
        }
    });
});