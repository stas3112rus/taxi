<?
function drawScripts()
{
    global $LEVEL, $DEFAULT;

?>
    <script src="<? echo $LEVEL ?>assets/js/modernizr-2.6.2.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/jquery.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/jquery.magnific-popup.js"></script>
    <script>
        $('.accordion_title').click(function() {
            $(this).hide();
            $(this).toggleClass('active').next().slideToggle(500);
        });
        $('.popup-modal').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#username'
        });
    </script>
    <script src="<? echo $LEVEL ?>assets/js/flatpickr/flatpickr.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/plugins.min.js"></script>
    <script>
        flatpickr(".flatpickr", {
            enableTime: true,
            disableMobile: true,

        });
    </script>
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
    <script src="<? echo $LEVEL ?>assets/js/scripts.js"></script>
<?
}
