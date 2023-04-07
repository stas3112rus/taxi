<?
function drawPolitics()
{
    global $TXT;
?>
    <noindex>
        <div id="polit_conf" class="mfp-hide" rel="nofollow">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close mfp-close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <? echo $TXT['politics_title'] ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <? echo $TXT['politics_text'] ?>
                </div>
            </div>
        </div>
    </noindex>
<?
}
