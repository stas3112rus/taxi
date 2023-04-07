<?
function drawPopUp()
{
    global $TXT;
?>
    <div class="sidebar-search mfp-hide white-popup-block" id="contact_form">
        <h6><? echo $TXT['pop-up-title'] ?></h6>
        <hr class="form-line">
        <div class="signup-box-body">
            <? drawTopForm() ?>
        </div>
    </div>
<?
}
