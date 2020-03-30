<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $call = $_POST['call'];
 $website = $_POST['website'];
 $priority = $_POST['priority'];
 $type = $_POST['type'];
 $message = $_POST['message'];
 $formcontent=" От кого: $name \n Телефон: $phone \n Пользовались услугами: $call \n E-mail клиента: $website \n Выбранная услуга: $priority \n Выбранный способ оплаты: $type \n Дополнения: $message";
 $recipient = " адрес_моей_почты@mail.ru";
 $subject = "ЗАКАЗ УСЛУГ С САЙТА";
 
  $verify = "Charset=windows-1251\r\n";
 mail($recipient, $subject, $formcontent, $mailheader) or die("Возникли ошибики при отправке сообщения. Попробуйте повторить попытку позже!");
 echo "Ваше сообщение успешно отправлено!";
 
?>
<form action="mail.php" method="POST">
<table>
<tr>
 <th class="name">Ваше имя:</th> <td class="point"><input type="text" name="name" size="35"> </td>
</tr>
<tr> 
 <th class="name">Ваш телефон:</th> <td class="point"><input type="text" name="phone" size="35"></td>
</tr>
<tr> 
 <th class="name">Вы уже пользовались нашими услугами?</th> <td class="point"> Да:<input type="checkbox" value="Да" name="call">  Нет:<input type="checkbox" value="Нет" name="call"></td>
</tr>
<tr> 
 <th class="name">Ваш e-mail:</th> <td class="point"> <input type="text" name="website" size="35"></td>
</tr>
<tr> 
 <th class="name">Выберите услугу:</th> <td class="point">
 <select name="priority" size="1">
 <option value="Генеральная уборка квартиры/дома">Генеральная уборка квартиры/дома</option>
 <option value="Уборка территорий">Уборка территорий</option>
 <option value="Чистка мебели">Чистка мебели</option>
 <option value="Чистка паром">Чистка паром</option>
 <option value="Чистка ковра">Чистка ковра</option>
 </select>
 </td>
</tr>
<tr> 
 <th class="name">Желаемый способ оплаты:</th> <td class="point">
 <select name="type" size="1">
 <option value="Предоплата">Предоплата</option>
 <option value="Наличный расчет">Наличный расчет</option>
 <option value="Безналичный расчет">Безналичный расчет</option>
 <option value="Оплата по договору">Оплата по договору</option>
 </select> </td>
</tr>
<tr> 
 <th class="name">Дополнения:</th> <td class="point"><textarea name="message" rows="6" cols="25"></textarea></td>
</tr>
<tr> 
 <td class="send" colspan=2 align="center"> <input type="submit" value="отправить"><input type="reset" value="очистить форму">
</td></tr>
</table>
</form>