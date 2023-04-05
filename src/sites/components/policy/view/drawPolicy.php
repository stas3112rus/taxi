<?
function drawPolicy()
{
    global $TXT;
?>
    <div id="offert" class="mfp-hide">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close mfp-close" data-dismiss="modal">×</button>
                <h4 class="modal-title"><? echo $TXT['policy_title'] ?></h4>
            </div>
            <div class="modal-body">
                <p> <? echo $TXT['policy_text'] ?> </p>
            </div>
        </div>
    </div>
<?
}
