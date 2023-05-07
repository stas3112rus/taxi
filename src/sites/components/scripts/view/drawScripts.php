<?
function drawScripts()
{
    global $LEVEL, $DEFAULT;
?>
    <script src="<? echo $LEVEL ?>js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="<? echo $LEVEL ?>js/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="<? echo $LEVEL ?>js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<? echo $LEVEL ?>js/modernizr.custom.js" type="text/javascript"></script>
    <script src="<? echo $LEVEL ?>js/flatpickr/flatpickr.js" type="text/javascript"></script>
    <script src="<? echo $LEVEL ?>js/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="<? echo $LEVEL ?>js/wow.min.js" type="text/javascript"></script>
    <script src="<? echo $LEVEL ?>js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<? echo $LEVEL ?>js/nivo-lightbox.min.js" type="text/javascript"></script>
    <script src="<? echo $LEVEL ?>js/jquery.ajaxchimp.min.js" type="text/javascript"></script>
    <script src="<? echo $LEVEL ?>js/jquery.countdown.min.js" type="text/javascript"></script>
    <script src="<? echo $LEVEL ?>js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<? echo $LEVEL ?>js/waypoints.min.js" type="text/javascript"></script>
    <script src="<? echo $LEVEL ?>js/maskedinput.js" type="text/javascript"></script>
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

    <script src="<? echo $LEVEL ?>js/custom.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function($) {
            $(".input-phone").mask("+7(999) 999-99-99");
        });
    </script>
<?
}
