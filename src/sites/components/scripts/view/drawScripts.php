<?
function drawScripts()
{
    global $LEVEL, $DEFAULT;

?>
    <script src="<? echo $LEVEL ?>js/jquery.min.js"></script>
    <script src="<? echo $LEVEL ?>js/bootstrap.min.js"></script>
    <script src="<? echo $LEVEL ?>css/lib/lib.js"></script>
    <script src="<? echo $LEVEL ?>js/flatpickr/flatpickr.js"></script>
    <script src="<? echo $LEVEL ?>js/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="<? echo $LEVEL ?>js/slick/slick.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<? echo $DEFAULT['recaptcha_site_key'] ?>"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<? echo $DEFAULT['recaptcha_site_key'] ?>', {
                    action: 'validate_captcha'
                })
                .then(function(token) {
                    document.getElementById('g-recaptcha-response').value = token;
                    document.getElementById('g-recaptcha-response2').value = token;
                });
        });
    </script>

    <script src="<? echo $LEVEL ?>js/common.js"></script>
<?
}
