<?php include_once ("func_First_Param.php");
 include_once ("func_Conn.php");
 include_once ("func_Add_Rows.php");
 include_once ("func_Row_Counts.php");
 include_once ("func_Table_Result.php");
 include_once ("func_Rand.php");?>



<html>
<head>
 <meta charset="UTF-8">
 <title>Мануал Clickhouse</title>
        <script type="text/javascript">
            function show_Max() {
		  document.getElementById("block4").style.top = "200px";
           }

            function show_Min() {
                document.getElementById("block4").style.top = "-110px";
           }

        </script>


<style type="text/css">
#block1
{
 position: relative; /* Относительное позиционирование */
    float: left; /* Совмещение колонок по горизонтали */
    width: 600px; /* Ширина слоя */
    height:320px;
    background: #800000; /* Цвет фона */
    color: white; /* Цвет текста */
 left: 5px; /* Сдвиг слоя влево */
    top: 5px; /* Смещение слоя вниз */
	text-align: right;
}

#block2
{
height:10px;
width:10px;
background-color: #ff0ff0;
   position: absolute; /* Абсолютное позиционирование */
    top: 75px; /* Положение от нижнего края */
     right: 980px; /* Положение от правого края */


}


#block4
{
position: relative; /* Относительное позиционирование */
    float: left; /* Совмещение колонок по горизонтали */
    width: 10px; /* Ширина слоя */
    height:10px;
   background: #800000;
    color: white; /* Цвет текста */
 left: -900px; /* Сдвиг слоя влево */
    top: -110px; /* Смещение слоя вниз */
}

#block5
{
height:10px;
width:10px;
background-color: #ff0ff0;
   
    top: 520px; 
    right: 980px; 
}


</style>


</head>
<body>

 








<div id="block1">
<form method="post">
<fieldset>
<legend>
Здесь можно добавить вопрос и решение по Clickhouse: 
<input type="button" onclick="show_Max();" value="V"/>
<input type="button" onclick="show_Min();" value="^"/>
</legend>


Выбрать тип вопроса:
<select name="Types" class="myInputT" required>
<option value=""></option> 
<option value="CH">CH</option> 
<option value="ZK">ZK</option> 
<option value="BI">BI</option> 
<option value="Func">Функции</option> 
<option value="Linux">Linux</option> 
</select>
 <p>
				
Задать вопрос: <textarea name = "Q" rows="5" cols="50" value =  "" class="myInputQ"></textarea>  
 <br>
Ответить: <textarea name = "A" rows="5" cols="50" value =  "" class="myInputA" required></textarea>  
 <br>
Уже есть в FAQ на Githab ? 
	Нет<input type =  "radio" name = "Git" value =  "N" checked>
	Да<input type =  "radio" name = "Git" value =  "Y"> 

<p>
	<input type="submit" name="add" value="Добавить в базу" >
			</fieldset>
		</form>



</div>

<div id="block2" >
Записей в базе: <?php Row_Counts($connect);?>




<div id="block4" >
 <?php Table_Result($connect);?>
 <?php $connect->close(); ?>
</div>



<div id="block5" >

<table id="sf" border="1" cellpadding="0" cellspacing="0"   >

<tr>
<th><select name="filt" onchange="filter1(this, 'sf'); this.options[0].selected = true; ">
<option value="">Фильтр по типу вопроса: </option>
<option value="">Сбросить фильтр</option> 
<option value="CH">CH</option> 
<option value="ZK">ZK</option> 
<option value="BI">BI</option> 
<option value="Func">Функции</option> 

</select> </th>
<th Width  = 80>Создание</th>
<th Width  = 20>Актуализация</th>
<th Width  = 20>Githab</th> 
<th Width  = 20>Вопрос</th>
<th Width  = 20>Ответ</th>
</tr> 
 <!-- 5 -->
<tr>
<td>Func</td>
  <td>2018-09-01</td>
<td>2018-09-01</td>
<td>NO</td>  
<td></td>
<td>
replaceRegexpOne('20170809', '(\\d{4})(\\d{2})(\\d{2})', '\\1-\\2-\\3') 
</td>
</tr>
<!-- 6 -->
<tr>
<td>CH</td>
  <td>2018-09-01</td>
<td>2018-09-01</td>
<td>NO</td>  
<td></td>
<td>
event_type  Enum8('VIEWS' = 1, 'CLICKS' = 2)
</td>
</tr>

</table>
   
</div>


</body>
</html>