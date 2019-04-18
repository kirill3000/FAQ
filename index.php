<?php  include_once ("func_Conn.php");

?>







<html>
<head>
 <title>Clickhouse мануал</title>
<meta charset="utf-8"> 
<meta name="yandex-verification" content="91981b26bdff965f, Clickhouse мануал , Clickhouse manual , Clickhouse документация, Кликхаус документация" />


<style type="text/css">





#Title
{
 position: absolute; /* Относительное позиционирование */
    height:60px;
    background: #800000; /* Цвет фона */
    color: white; /* Цвет текста */
 transform: translate(-50%, -50%);
  position: absolute; 
  top: 5; 
  left: 50%;
	
}




#Add
{
  text-align: right;	
 position: absolute; /* Относительное позиционирование */
    float: left; /* Совмещение колонок по горизонтали */
    width: 600px; /* Ширина слоя */
    height:320px;
   background: #add8e6;
    color: black; /* Цвет текста */
top: 250px; /* Смещение слоя вниз */
 transform: translate(-50%, -50%);
  position: absolute; 
  left: 50%;
display: none;

	
	
}


#Filter
{
position: absolute; /* Относительное позиционирование */
    float: left; /* Совмещение колонок по горизонтали */
    width: 510px; /* Ширина слоя */
    height:210px;
   background: #add8e6;
    color: black; /* Цвет текста */
top: 200px; /* Смещение слоя вниз */
 transform: translate(-50%, -50%);
  position: absolute; 
  left: 50%;


	<?php  

 ( isset($_POST['Sub_filter']) or isset($_POST['Sub_filter_del']) )?  $Temp = " display: inline;" :  $Temp = "display: none;"  ;
  echo $Temp ;
?>
	

}




#Result
{
 position: absolute; /* Относительное позиционирование */
    height:320px;
  /*  background: #800000; */
    color: white; /* Цвет текста */


	<?php  

 ( isset($_POST['Sub_filter']) or isset($_POST['Sub_filter_del']) ) ?  $Temp = "top: 320px;" :  $Temp = " top: 90px; "  ;
  echo $Temp ;
?>


}


 
	


.table_blur { 
    width: 100%; 
    border-collapse: collapse; 
   /* margin:50px auto;*/
    }
.table_blur tr:nth-of-type(odd) { 
    background: #eee; 
    }
.table_blur th { 
    background: #add8e6; 
    color: black; 
    font-weight: bold; 
	    text-align: center; 
    }
.table_blur td { 
    padding: 10px; 
    border: 1px solid #ccc; 
    text-align: left; 
    font-size: 18px;
    }




</style>



<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50797789 = new Ya.Metrika2({
                    id:50797789,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50797789" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

 <meta charset="UTF-8">

 
 
        <script type="text/javascript">


		
		
            function show_Max_Add() {
		  document.getElementById("Result").style.top = "420px";
			document.getElementById("Add").style.display = "inline";
			document.getElementById("Filter").style.display = "none";
           }

            function show_Min_Add() {
                document.getElementById("Result").style.top = "90px";
				document.getElementById("Add").style.display = "none";
           }
		   

		               function show_Max_Filter() {
		  document.getElementById("Result").style.top = "320px";
			document.getElementById("Add").style.display = "none";
			document.getElementById("Filter").style.display = "inline";
           }

            function show_Min_Filter() {
                document.getElementById("Result").style.top = "90px";
				document.getElementById("Filter").style.display = "none";
           }
		   
	   
   

        </script>





</head>
<body>





  
<div id ="Title">
<h1> Clickhouse мануал </h1>
 
<table border="1"  bgcolor="#A9A9A9">
<tr>
<th Width  = 110>  <input type="button" onclick="show_Max_Add();" value="Добавить вопрос:"/> </th>
<th Width  = 110>  <input type="button" onclick="show_Max_Filter();" value="Добавить фильтры:"/> </th>
<th Width  = 210>  <input type="text" id="user" size="40"" value="Вопросы и пожелания на почту: kiril-2012@list.ru"/> </th>
</tr>
</table>  
</div>





<div id="Add">

<form action='Add.php' method='POST'>
<fieldset>
<legend>
Здесь можно добавить вопрос и решение по Clickhouse: 
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
				
Задать вопрос: <textarea name = "Q" rows="5" cols="50"  ></textarea>  
 <br>
Ответить: <textarea name = "A" rows="5" cols="50"  required></textarea>  
 <br>
Уже есть в FAQ на Githab ? 
	Нет<input type =  "radio" name = "Git" value =  "N" checked>
	Да<input type =  "radio" name = "Git" value =  "Y"> 

<p>
<input type="button" onclick="show_Min_Add();" value="Свернуть"/>
	<input type="submit" name="add" value="Добавить в базу" >

	
			</fieldset>
				</form>		

					
</div>
	
	
<div id="Filter">



<?php 


$Q_Types="
select '' as name union all
SELECT distinct Types as name FROM test where 1=1 ";

$X2 =$connect->query($Q_Types);
?>



<form action='' method='POST'>
<fieldset>
<legend>
Здесь можно отфильтровать вопрос и решение по Clickhouse: 
</legend>

<table border="1">
<tr>
<th Width  = 110>  Тип вопроса: </th>
<th Width  = 110> <select name="Sel_types" >
<?php 

while ($row = mysqli_fetch_assoc($X2))
{
if ($_POST['Sel_types']	==  $row['name']) 
{	    echo "<option selected  value=".$row['name'].">".$row['name']."</option>";}
 else 
 {    echo "<option value=".$row['name'].">".$row['name']."</option>";};
	
}
?>        
</select></th>



<tr>
<th Width  = 160>  Автор телеграм: </th>
<th Width  = 110> <input type="text" name="HTML_Author"></th>



<tr>
<th Width  = 110>  Дата С: </th>
<th Width  = 110> <input type="date" name="date"></th>



<tr>
<th Width  = 110>  Вопрос: </th>
<th Width  = 110> <textarea rows="2" cols="45" name="Q"></textarea></th>


<tr>
<th Width  = 110>  Ответ: </th>
<th Width  = 110> <textarea rows="2" cols="45" name="A"></textarea></th>

</tr>

<tr>
<th Width  = 110>  Действие: </th>
<th Width  = 110>  
 <input type="button" onclick="show_Min_Filter();" value="Свернуть"/>
 <input type="submit" name="Sub_filter"  value="Отфильтровать" >
 <input type="submit" name="Sub_filter_del"  value="Сбросить фильтры" >
 </th></th> </th>


</tr>


</table>  



		</fieldset>
				</form>	


</div>	
	
<div>	

	<form action='' method='POST'>
Выбрать страницу:	<input type="number" name="Page_Limit" value=<?php echo $_POST['Page_Limit']; ?> min="0" max="53" step="1">
	 <input type="submit" name="Page_Limit_Submit"  value="Выбрать страницу" > <?php echo $query_Counter_Page; ?>
	</form>
</div>	
	
	
	
	
<div id="Result">
	


<?php

/*
 ( isset($_POST['Sub_filter']) && $_POST['Sel_types'] != '' ) or isset($_POST['Page_Limit']) ? $Filter = " and Types ='".$_POST['Sel_types']."'"  : $Filter = " and 1=1";
 ( isset($_POST['Sub_filter'])  && $_POST['Q'] != '' ) or isset($_POST['Page_Limit']) ? $P_Filter_Q = " and Q ='".$_POST['Q']."'"  : $P_Filter_Q = " and 1=1";
*/
$Filter = " and 1=1";
( isset($_POST['Sub_filter']) &&  $_POST['HTML_Author'] != '') ? $Filter_Author = " and Author ='".$_POST['HTML_Author']."'"  : $Filter_Author = " and 1=1";
$Limits_min = $_POST['Page_Limit'] *1000;
$Limits_max = $Limits_min+1000 ;
$Limits = ' LIMIT '.$Limits_min.' , '.$Limits_max.'';

$query = "SELECT  Id, cast(Create_Date as date) as  Create_Date, Types, Q,A, Author FROM test where 1=1 ";
$query = $query . $Filter . $Filter_Author  . $Limits;
  
$Counter_Page = "SELECT  count(*) as Counter_Page FROM test where 1=1 ";
$query_Counter_Page = $Counter_Page . $Filter . $Filter_Author ;
  

/* echo $query;*/

if ($result = $connect->query($query)) {

print '<table class="table_blur">';
 print '<tr>
<th>Id</th>
<th nowrap>Тип вопроса</th>
<th>Создание</th>
<th>Телеграм</th>
<th>Вопрос</th>
<th>Ответ</th>
</tr>';

  while ($row = mysqli_fetch_assoc($result)) {
    print '<tr>';
    print '<td>'.$row["Id"].'</td>';
		    print '<td>'.$row["Types"].'</td>';
				    print '<td  nowrap>'.$row["Create_Date"].'</td>';
					print '<td>'.$row["Author"].'</td>';
			    print '<td>'.$row["Q"].'</td>';
				    print '<td>'.$row["A"].'</td>';

    print '</tr>';
}
print '</table>';
mysqli_free_result($result);

}

/* закрытие соединения */
$connect->close();
  
  
  
		
?>


	
		


</div>

</body>
</html>




