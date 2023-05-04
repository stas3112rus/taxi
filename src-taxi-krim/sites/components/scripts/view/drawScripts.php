<?
function drawScripts()
{
    global $LEVEL, $DEFAULT;

?>
    <script src="<? echo $LEVEL ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/bootstrap/js/popper.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/owl.carousel.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/jquery.counterup.min.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/waypoints.min.js"></script>
    <script src="assets/js/monthly.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDy1NKL2-Xa9hNoEHGmDqr8pcORNbZGywg"></script>
    <script src="<? echo $LEVEL ?>assets/js/flatpickr/flatpickr.js"></script>
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/js/flatpickr/flatpickr.css">
    <script src="<? echo $LEVEL ?>assets/js/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
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

    <script src="<? echo $LEVEL ?>assets/js/main.js"></script>
    <script src="<? echo $LEVEL ?>assets/js/date.js"></script>
    <script type="text/javascript">
        flatpickr(".flatpickr", {
            enableTime: true,
            disableMobile: true,
        });
    </script>
<?
}
