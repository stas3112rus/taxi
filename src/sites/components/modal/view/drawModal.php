<?
function drawModal()
{
    global $TXT;
?>
    <div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class='modal-title text-center'>
                        <? echo $TXT['modal_title'] ?>
                    </h3>
                </div>
                <div class="modal-body">
                    <div class="form-search light">
                        <?
                        drawModalForm();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?
}
