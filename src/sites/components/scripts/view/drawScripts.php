<?
function drawScripts()
{
    global $LEVEL, $DEFAULT;

?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="<? echo $LEVEL ?>builder/disc/elements/js/jquery.magnific-popup.js"></script>
    <script src="<? echo $LEVEL ?>builder/disc/elements/js/waypoints.min.js"></script>
    <script src="<? echo $LEVEL ?>builder/disc/elements/js/jquery.counterup.js"></script>
    <script src="<? echo $LEVEL ?>builder/disc/elements/js/responsive-nav.js"></script>
    <script src="<? echo $LEVEL ?>builder/disc/elements/js/fastclick.js"></script>
    <script src="<? echo $LEVEL ?>builder/disc/elements/js/owl.carousel.js"></script>
    <script src="<? echo $LEVEL ?>builder/disc/elements/js/flatpickr/flatpickr.js"></script>
    <script src="<? echo $LEVEL ?>builder/disc/elements/js/flatpickr/flatpickr.js"></script>
    <script src="<? echo $LEVEL ?>builder/disc/elements/js/jquery.singlePageNav.js"></script>
    <script src="<? echo $LEVEL ?>builder/disc/elements/js/jquery.twentytwenty.js"></script>
    <script src="<? echo $LEVEL ?>builder/disc/elements/js/jquery.event.move.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/stickynavbar.js/1.3.2/jquery.stickyNavbar.min.js"></script>
    <script src="<? echo $LEVEL ?>maine-js/jquery.cookie.js"></script>
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

    <script src="<? echo $LEVEL ?>maine-js/main.js"></script>
<?
}
