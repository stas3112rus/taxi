<?
function drawPolitic()
{
    global $TXT;
?>
    <div class="container">
        <div class="modal fade" id="polit_conf" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><? echo $TXT['politic_title'] ?></h4>
                    </div>
                    <div class="modal-body">
                        <? echo $TXT['politic_text'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?
}
