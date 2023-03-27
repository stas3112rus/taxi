<?
function drawOferta()
{
    global $TXT;
?>
    <div class="oferta hidden">
        <div class="wrapper">
            <button class="close btnOferta">X</button>
            <h2>Политика конфиденциальности и оферта</h2>
            <?
            echo $TXT["oferta_txt"];
            ?>
        </div>
    </div>
<?
}