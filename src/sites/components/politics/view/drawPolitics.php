<?
function drawPolitics()
{
    global $TXT;
?>
    <div class="modal fade" id="offerta-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class='modal-title'>
                        <? echo $TXT['politics_title'] ?>
                    </h5>
                </div>
                <div class="modal-body">
                    <? echo $TXT['politics_text'] ?>
                </div>
            </div>
        </div>
    </div>
<?
}
