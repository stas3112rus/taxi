<?
function drawScripts()
{
    global $LEVEL;

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
    <script src="<? echo $LEVEL ?>assets/js/scripts.js"></script>
<?
}
