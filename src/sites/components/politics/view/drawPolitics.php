<?
function drawPolitics()
{
    global $TXT;
?>
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="wrapp-toggle-form">
            <div class="toggle-form">
                <div class="wrapper-form form-style">
                    <div id="contact_body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4><? echo $TXT['politics_title'] ?></h4>
                        <? echo $TXT['politics_text'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?
}
