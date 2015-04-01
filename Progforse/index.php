<!DOCTYPE html>
<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<TITLE> Сайт для стажеровки </TITLE>
<link rel="stylesheet" href="css/1.css">

</HEAD>
<BODY>
<div id='pos1'>
<H1>Форма регистрации</H1>
<PRE><form  action="Save.php" method="post"> <table> <tr> <td><H1>                         ФИО сотрудника:            <input  name="FIO" type="text" placeholder="Иванов Иван Иваныч"  autofocus required 
  width="30%"></td><td><H1> Id: <input  name="id" type="text" placeholder="впишите id"  autofocus required 
  width="30%"> </td> </H1>
  </tr>
</table><?php 
$host="127.0.0.1";

$user="root";

$password="39655844";


/*Подключаемся к БД*/

$db = mysql_connect($host,$user,$password);

mysql_select_db('progforse', $db);

/*Делаем запрос к БД*/

$result = mysql_query("Select * from sotrudniki ",$db);


 ?><select name="FIO1" class="Bt"  >
<?php while ($myrow = mysql_fetch_array($result)) : ?>
<option   value="FIOSel"> (Id)-<?php echo $myrow['id'] ?>    (ФИО сотрудника)-<?php echo $myrow['FIO'] ?></option>';
    <?php endwhile ?>
    
<input name="Кнопка" class="Bt" type="submit" value="Отправить" onclick="validate(this.form)">
<input name="Кнопка" class="Bt" type="submit" value="Обновить"  > 
<input name="Кнопка" class="Bt" type="submit" value="Удалить"  >     
<input class="Bt" type="reset" value="Очистить">       
</form></PRE> 


<script>

function showError(container, errorMessage) {
  container.className = 'error';
  var msgElem = document.createElement('span');
  msgElem.className = "error-message";
  msgElem.innerHTML = errorMessage;
  container.appendChild(msgElem);
}

function resetError(container) {
  container.className = '';
  if (container.lastChild.className == "error-message") {
    container.removeChild(container.lastChild);
  }
}

function validate(form) {
  var elems = form.elements;
var K=4;
  resetError(elems.FIO.parentNode);
  if (!elems.FIO.value) {K--;
    showError(elems.FIO.parentNode, ' Укажите ФИО регистрируемого сотрудника.');
  }

  resetError(elems.FIOUp.parentNode);
  if (!elems.FIOUp.value) {K--;
    showError(elems.FIOUp.parentNode, ' Укажите ФИО регистрируемого сотрудника.');
  }

 
  if (K==4){
  	alert("Ваша заявка доставлена");
  }
}
</script>
</div>
</BODY>
</HTML>