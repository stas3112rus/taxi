<?
function drawTariffsTable()
{
    global $TARIFFS_TABLE;
?>
    <table class="highlight">
        <thead>
            <tr>
                <th data-field="id">Направление</th>
                <th data-field="name">Эконом</th>
                <th data-field="price">Комфорт</th>
                <th data-field="price">Бизнес</th>
                <th data-field="price">Мини-Бус</th>
                <th data-field="price">VIP</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Трансфер Саки - Ялта <span style="color: #ff6600;"><b>АКЦИЯ!</b> до 02 апреля 2023</td>
                <td><s>2500</s><span style="color: #ff6600;"> 2000</span></td>
                <td><s>2800</s><span style="color: #ff6600;"> 2240</span></td>
                <td><s>4500</s><span style="color: #ff6600;"> 3600</span></td>
                <td><s>4200</s><span style="color: #ff6600;"> 3360</span></td>
                <td><s>4200</s><span style="color: #ff6600;"> 3360</span></td>
            </tr>
        </tbody>
    </table>
<?
}
