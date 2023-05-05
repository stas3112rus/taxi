<?
function drawScripts()
{
    global $LEVEL, $DEFAULT;

?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<? echo $LEVEL ?>js/bootstrap.min.js"></script>
    <script>
        $(".nav a").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
    </script>
    <script src="<? echo $LEVEL ?>js/flatpickr.js"></script>
    <script>
        flatpickr(".flatpickr", {
            enableTime: true,
            disableMobile: true,

        });
    </script>
    <script src="<? echo $LEVEL ?>js/jquery.flexslider-min.js"></script>
    <script src="<? echo $LEVEL ?>js/main.js"></script>

    <script src="https://www.google.com/recaptcha/api.js?render=<? echo $DEFAULT['recaptcha_site_key'] ?>"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<? echo $DEFAULT['recaptcha_site_key'] ?>', {
                    action: 'validate_captcha'
                })
                .then(function(token) {
                    document.getElementById('g-recaptcha-response').value = token;
                });
        });
    </script>
<?
}
