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
   background: #f0f0f0;
  width: 1200px; 
    height:80px;
 /*
 transform: translate(-50%, -50%);
  top: 45; 
  left: 50%;
  */
	
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

 ( isset($_POST['Sub_filter'])  )?  $Temp = " display: inline;" :  $Temp = "display: none;"  ;
  echo $Temp ;
?>
	

}




#Result
{
 position: absolute; /* Относительное позиционирование */
    height:350px;
  /*  background: #800000; */
    color: white; /* Цвет текста */


	<?php  

 ( isset($_POST['Sub_filter'])  ) ?  $Temp = "top: 350px;" :  $Temp = " top: 90px; "  ;
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


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(50797789, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50797789" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
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
		  document.getElementById("Result").style.top = "350px";
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


<?php 


isset($_POST['Sub_filter_del']) ?  $_POST['HTML_Author']="" : $_POST['HTML_Author']  ;




$Filter = " and 1=1";


( !isset($_POST['Page_Limit']) or isset($_POST['HTML_Sub_filter']) ) ? $_POST['Page_Limit']=1 : $_POST['Page_Limit']  ;

(isset($_POST['HTML_Author']) && $_POST['HTML_Author'] != '')  ? $Filter_Author = " and Author ='".$_POST['HTML_Author']."'"  : $Filter_Author = " and 1=1";
(isset($_POST['Sel_types']) && $_POST['Sel_types'] != '')  ? $Filter_Types = " and Types ='".$_POST['Sel_types']."'"  : $Filter_Types = " and 1=1";

$Chanck_Counter=100;



$Limits_min = ($_POST['Page_Limit'] ) * 1 -1;
$Limits_min = ($Limits_min ) * $Chanck_Counter;

$Limits_max = $Limits_min+$Chanck_Counter ;
$Limits = ' LIMIT '.$Limits_min.' , '.$Limits_max.'';
$Desc = ' order by Ro ';


$query = "SELECT Id as Idd, row_number() over ( order by Id desc ) as Ro , cast(Create_Date as date) as  Create_Date, Types, Q,A, Author FROM test where 1=1 ";
$query = $query . $Filter . $Filter_Types . $Filter_Author  .  $Desc . $Limits;
  
$Counter_Page = "SELECT  CEIL(count(*)/$Chanck_Counter) as Counter_Page , Max(Id) as Max_Rows  FROM test where 1=1 ";
$Counter_Page = $Counter_Page . $Filter . $Filter_Types . $Filter_Author   ;

/*
 if ($result = $connect->query($Counter_Page)) {
$row_Counter_Page = mysqli_fetch_array($result);
print $row_Counter_Page["Max_Rows"];
 }

*/

/*echo '_'.$_POST['submit_UP_HTML'].'_';*/

$submit_UP_HTML = $_POST['submit_UP_HTML'];
$submit_UP_HTML = explode("_", $submit_UP_HTML);  
 
$UP_Idd =  $submit_UP_HTML[0];
$UP_Ro =  $submit_UP_HTML[1];
$UP_Types =   $_POST['xxx'][$submit_UP_HTML[2]-1] ;


/* Update типа*/
$Q_UP_Types='update `test` set Types = "'.$UP_Types.'"   where 1=1 and Id = '.$UP_Idd;
$Q_UP_Types = mysqli_query($connect, $Q_UP_Types);


/* Список типов*/
$Q_Types='
select "" as name union all
SELECT distinct Types as name FROM test where 1=1 ';

$X2 =$connect->query($Q_Types);





/*

 echo '_'.$UP_Idd.'_'.$UP_Ro.'_'.$UP_Types;



*/



print'



  
<div id ="Title">

<fieldset>
<legend>
Clickhouse мануал
</legend>';

 if ($result = $connect->query($Counter_Page)) {
$row_Counter_Page = mysqli_fetch_array($result);
print '



<form action="" method="POST" ">
<table>
<tr>	
<th>  
Текущая страница: <input type="number" name="Page_Limit" value='.$_POST['Page_Limit'].' min="1" max=' . $row_Counter_Page["Counter_Page"].' step="1">  из ' . $row_Counter_Page["Counter_Page"].'

<button type="submit" value="0" name="submit_UP_HTML" >&#10004;</button>
</form>




<th>  <input type="button" onclick="show_Max_Filter();" value="Добавить фильтры"/> </th>
<th> <input type="submit" name="Sub_filter_del"  value="Очистить фильтры" > </th>
<th>  <input type="button" onclick="show_Max_Add();" value="Добавить вопрос"/> </th>
<th>  <input type="text" id="user" size="40"" value="Вопросы и пожелания на почту: kiril-2012@list.ru"/></th>

<th>

<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=50797789&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/50797789/2_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:79px; height:39px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" class="ym-advanced-informer" data-cid="50797789" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

</th>

</tr>
</table>  

</fieldset>




</div>	
';} 
 print'
<div id="Add">

<form action="Add.php" method="POST">
<fieldset>
<legend>
Здесь можно добавить вопрос и решение по Clickhouse: 
</legend>


Выбрать тип вопроса:
<input type="text"  name="Types" ></>
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



<form action="" method="POST">
<fieldset>
<legend>
Здесь можно отфильтровать вопрос и решение по Clickhouse: 
</legend>

<table border="1">
<tr>
<th>Тип</th>
<th> <select name="Sel_types" >
';


while ($row = mysqli_fetch_assoc($X2))
{
if ($_POST["Sel_types"]	==  $row["name"]) 
{	    echo '<option selected  value='.$row["name"].'>'.$row["name"].'</option>';}
 else 
 {    echo '<option value='.$row["name"].'>'.$row["name"].'</option>';};
	
}
print'       
</select></th>



<tr>
<th>Автор</th>
<th> <input type="text" name="HTML_Author" value ="'.$_POST['HTML_Author'].'"></th>


<!--
<tr>
<th Width  = 110>  Дата С: </th>
<th Width  = 110> <input type="date" name="date"></th>
-->


<tr>
<th Width  = 110>Вопрос</th>
<th Width  = 110> <textarea rows="2" cols="45" name="Q"></textarea></th>


<tr>
<th Width  = 110>Ответ</th>
<th Width  = 110> <textarea rows="2" cols="45" name="A"></textarea></th>

</tr>

<input type="hidden" name="Page_Limit" value='.$_POST['Page_Limit'].'>


<tr>
<th Width  = 110>Действие</th>
<th Width  = 110>  
 <input type="button" onclick="show_Min_Filter();" value="Свернуть"/>
 <input type="submit" name="HTML_Sub_filter"  value="Отфильтровать" >

 </th></th> </th>


</tr>


</table>  



		</fieldset>
		


</div>	


';


/* echo $query;*/


	
	

print '	
<div id="Result">
	';





print '<table class="table_blur">';
 print '<tr>
<th>&#9997;</th>
<th nowrap>№</th>
<th nowrap>Тип</th>
<!--<th>Дата</th>-->
<th>Автор</th>
<th>Вопрос</th>
<th>Ответ</th>
</tr>';


	
	
	
	if ($result = mysqli_query($connect, $query)) {

    /* извлечение ассоциативного массива */
    while ($row = mysqli_fetch_assoc($result)) {
		   $i = $i + 1; // Увеличение переменной $i на 1, сокращенная запись $i++
     

    print '<tr>';		
/*print '<td>'.$row["Author"][0].'</td>';*/
	/*	print '<td><input type="submit" name="submit_UP_HTML" value ="'.$row["Ro"].'"></td>';*/
		

		print '<td><button type="submit" value="'.$row["Idd"]."_".$row["Ro"]."_".$i.'" name="submit_UP_HTML" >&#9997;</button></td>';

		
	/*	print '<input type="text" name="Page_Limit" value ="'.$_POST['Page_Limit'].'">'; */

		print '<td>'.$row["Ro"].'</td>';
		print '<td><input type="text" name="xxx[]" value="'.$row["Types"].'"></td>';
		print '<td>'.$row["Author"].'</td>';
		print '<td>'.$row["Q"].'</td>';
		print '<td>'.$row["A"].'</td>';
		
		
		
		




	
    print '</tr>';	


    }}


print '</table>';
print '</from>';
mysqli_free_result($result);



/* закрытие соединения */
$connect->close();
  
  
  
		
?>


	
		


</div>

</body>
</html>




