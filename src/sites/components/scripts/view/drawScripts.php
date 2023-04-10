<?
function drawScripts()
{
    global $LEVEL;

?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<? echo $LEVEL ?>js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(".nav a").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
    </script>
    <script src="<? echo $LEVEL ?>js/jquery.flexslider-min.js"></script>
    <script src="<? echo $LEVEL ?>js/main.js"></script>
<?
}
