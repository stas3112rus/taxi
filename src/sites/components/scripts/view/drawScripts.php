<?
function drawScripts()
{
    global $LEVEL;

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
<?
}
