<?php echo form_open("billing/schetfactura"); ?>
    <input type="hidden" name="period_id" value="<?php echo $period_id; ?>">
    <input type="hidden" name="firm_id" value="<?php echo $firm_id; ?>">
    <table>
        <tr>
            <td>Выдача накладной</td>
            <td><input type=checkbox name=nakladnaya></td>
        </tr>
        <tr>
            <td>Другая дата выдачи:</td>
            <td><input name=data_schet value='<?php echo $r->data_schet; ?>'></td>
        </tr>
        <tr>
            <td>Другой номер счетфактуры:</td>
            <td><input name=schet2 value='<?php echo $r->schet2; ?>'></td>
        </tr>
        <tr>
            <td>Последний номер счета-фактуры</td>
            <td><input type="text" disabled value="<?php echo $max_schet_number; ?>"></td>
        </tr>
        <tr>
            <td>Условия оплаты по договору:</td>
            <td><input name=edit1 value='<?php echo $firm->edit1; ?>'></td>
        </tr>
        <tr>
            <td>Пункт назначения поставляемых товаров (работ, услуг):</td>
            <td><input name=edit2 value='<?php echo $firm->edit2; ?>'></td>
        </tr>
        <tr>
            <td>Поставка товаров осуществлена по доверености:</td>
            <td><input name=edit3 value='<?php echo $firm->edit3; ?>'></td>
        </tr>
        <tr>
            <td>Способ отправления:</td>
            <td><input name=edit4 value='<?php echo $firm->edit4; ?>'></td>
        </tr>
        <tr>
            <td>Грузоотправитель:</td>
            <td><input name="edit5" value='<?php echo $firm->edit5; ?>'></td>
        </tr>
        <tr>
            <td>Грузополучатель:</td>
            <td><textarea name="gruzopoluchatel"
                          id="gruzopoluchatel"
                          cols="50"
                          rows="3"><?php echo trim($firm->bin) . ", " . $firm->name . " " . $firm->address; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Получатель:</td>
            <td><input type="text"
                       name="pokupatel"
                       value='<?php echo($firm->name); ?>'></td>
        </tr>
        <tr>
            <td>БИН и адрес нахождения покупателя:</td>
            <td><textarea name="pokupatel_address"
                          id="pokupatel_address"
                          cols="50"
                          rows="3"><?php echo trim($firm->bin) . ", " . $firm->address; ?></textarea></td>
        </tr>
        <tr>
            <td>Другой номер договора:</td>
            <td><input name=dog2 value='<?php echo $firm->dog2; ?>'></td>
        </tr>
        <tr>
            <td colspan="2"><input type=submit value='Открыть счетфактуру'/></td>
        </tr>
    </table>
<?php form_close(); ?>