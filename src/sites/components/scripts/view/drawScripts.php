<?
function drawScripts()
{
    global $LEVEL, $DEFAULT;

?>

    <script src="<? echo $LEVEL ?>assets/js/jquery.2.2.3.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/bootstrap.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/modernizr-custom.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/scrollreveal.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/slick.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/swiper.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/jarallax.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/jquery.counterup.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/waypoints.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/owl.carousel.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/flatpickr/flatpickr.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<? echo $DEFAULT['recaptcha_site_key'] ?>"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<? echo $DEFAULT['recaptcha_site_key'] ?>', {
                    action: 'validate_captcha'
                })
                .then(function(token) {
                    document.getElementById('g-recaptcha-response').value = token;
                    document.getElementById('g-recaptcha-response-2').value = token;
                });
        });
    </script>

    <script src="<? echo $LEVEL ?>assets/js/script.js"></script>
<?
}
