<?
function drawScripts()
{
    global $CURRENT_SITE;

?>
    <script src="https://use.fontawesome.com/bfbb6dd71f.js"></script>
    <script src="<? echo $CURRENT_SITE ?>js/jquery-1.10.2.min.js"></script>
    <script src="<? echo $CURRENT_SITE ?>js/bootstrap.min.js"></script>
    <script src="<? echo $CURRENT_SITE ?>js/mask_input.js"></script>
    <script src="<? echo $CURRENT_SITE ?>js/ventcamp.js"></script>
    <script src="<? echo $CURRENT_SITE ?>js/mask.js"></script>

    <script src="<? echo $CURRENT_SITE ?>js/flatpickr.js"></script>
    <link rel="stylesheet" type="text/css" href="<? echo $CURRENT_SITE ?>css/flatpickr.css">

    <script type="text/javascript">
        flatpickr(".flatpickr", {
            enableTime: true,
            disableMobile: true,

        });
    </script>


    <link rel="stylesheet" href="<? echo $CURRENT_SITE ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<? echo $CURRENT_SITE ?>css/owl.theme.default.min.css">
    <script src="<? echo $CURRENT_SITE ?>js/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {

            $("#form").submit(function() {
                $.ajax({
                    type: "POST",
                    url: "<? echo $CURRENT_SITE ?>mail.php",
                    data: $(this).serialize()
                }).done(function() {
                    $(this).find("input").val("");
                    $('#form').fadeOut(500);
                    $("#form").trigger("reset");
                    $('.msg').fadeIn(1000);

                });
                return false;
            });

        });


        $(document).ready(function() {

            $("#form2").submit(function() {
                $.ajax({
                    type: "POST",
                    url: "<? echo $CURRENT_SITE ?>mail.php",
                    data: $(this).serialize()
                }).done(function() {
                    $(this).find("input").val("");
                    $('#form2').fadeOut(500);
                    $("#form2").trigger("reset");
                    $('.msg2').fadeIn(600);
                });
                return false;
            });

        });
    </script>


    <script src="<? echo $CURRENT_SITE ?>common.js"></script>
<?
}
