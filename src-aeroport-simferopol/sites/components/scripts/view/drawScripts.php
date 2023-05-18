<?
function drawScripts()
{
    global $LEVEL, $DEFAULT;

?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <script src="<? echo $LEVEL ?>js/top.js"></script>
    <script src='<? echo $LEVEL ?>js/flickity.pkgd.min.js'></script>
    <script src="<? echo $LEVEL ?>js/testimonials.js"></script>
    <script src="<? echo $LEVEL ?>js/counter.js"></script>
    <script src="<? echo $LEVEL ?>js/jquery.waypoints.min.js"></script>
    <script src="<? echo $LEVEL ?>js/jquery.counterup.js"></script>
    <script src="<? echo $LEVEL ?>js/bootstrap.min.js"></script>
    <script src="<? echo $LEVEL ?>js/contact.js"></script>
    <script src="<? echo $LEVEL ?>js/validator.js"></script>
    <script src="<? echo $LEVEL ?>js/navbar.js"></script>
    <script src="<? echo $LEVEL ?>js/loader.js"></script>
    <script src='<? echo $LEVEL ?>js/slick.min.js'></script>
    <script src="<? echo $LEVEL ?>js/car.slider.js"></script>
    <script src="<? echo $LEVEL ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<? echo $LEVEL ?>js/flatpickr/flatpickr.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<? echo $DEFAULT['recaptcha_site_key'] ?>"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<? echo $DEFAULT['recaptcha_site_key'] ?>', {
                    action: 'validate_captcha'
                })
                .then(function(token) {
                    document.getElementById('g-recaptcha-response').value = token;
                    document.getElementById('g-recaptcha-response-2').value = token;
                    document.getElementById('g-recaptcha-response-3').value = token;
                });
        });
    </script>

    <script src="<? echo $LEVEL ?>js/common.js"></script>
<?
}
