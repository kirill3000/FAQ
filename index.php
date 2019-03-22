<?php  include_once ("func_Conn.php");

?>





<html>
<head>



<style type="text/css">
#block1
{
 position: absolute; /* Относительное позиционирование */
    float: left; /* Совмещение колонок по горизонтали */
    width: 600px; /* Ширина слоя */
    height:320px;
    background: #800000; /* Цвет фона */
    color: white; /* Цвет текста */
 left: 10px; /* Сдвиг слоя влево */
    top: 35px; /* Смещение слоя вниз */
	text-align: right;
}


#block2
{
position: absolute; /* Относительное позиционирование */
    float: left; /* Совмещение колонок по горизонтали */
    width: 10px; /* Ширина слоя */
    height:10px;
   background: #800000;
    color: white; /* Цвет текста */
 left: 15 px; /* Сдвиг слоя влево */
    top: 30px; /* Смещение слоя вниз */
	text-align: right;
}




#block4
{
position: absolute; /* Относительное позиционирование */
    float: left; /* Совмещение колонок по горизонтали */
    width: 10px; /* Ширина слоя */
    height:10px;
   background: #800000;
    color: white; /* Цвет текста */
 left: 15 px; /* Сдвиг слоя влево */
    top: 30px; /* Смещение слоя вниз */
	text-align: right;
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
 <title>Мануал Clickhouse</title>
 
 
 
        <script type="text/javascript">
            function show_Max() {
		  document.getElementById("block4").style.top = "330px";
           }

            function show_Min() {
                document.getElementById("block4").style.top = "30px";
           }
		   
	    

        </script>





</head>
<body>

  
<div>
 
 
<table border="1"  bgcolor="#A9A9A9">
<tr>
<th Width  = 110>  <input type="button" onclick="show_Max();" value="Добавить вопрос:"/> </th>
<th Width  = 110>  <input type="button" onclick="show_Max();" value="Добавить фильтры:"/> </th>
</tr>
</table>  
</div>





<div id="block1">

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
<input type="button" onclick="show_Min();" value="Свернуть"/>
	<input type="submit" name="add" value="Добавить в базу" >

	
			</fieldset>
				</form>		

					
</div>
	
	
<div id="block2">

<table border="1"  bgcolor="#5he8jd">
<tr>
<th Width  = 110>  ccccccccccccccccccccccccccccc </th>
<th Width  = 110>  cccccccccccccccccccccccc</th>
<th Width  = 110>  cccccccccccccccccccccccc</th>
</tr>
</table>  

</div>	
	
	
	
	
<div id="block4">
	


<?php

  
  
  
  
  $query = "SELECT Id, cast(Create_Date as date) as  Create_Date, Types, Q,A FROM test";

if ($result = $connect->query($query)) {

print '<table border="1" width = 1500px;  bgcolor="#A9A9A9">';
 print '<tr>
<th>Id</th>
<th>Тип вопроса</th>
<th Width  = 90 >Создание</th>
<th Width  = 600>Вопрос</th>
<th Width  = 700>Ответ</th>
</tr>';

  while ($row = mysqli_fetch_assoc($result)) {
    print '<tr>';
    print '<td>'.$row["Id"].'</td>';
		    print '<td>'.$row["Types"].'</td>';
				    print '<td>'.$row["Create_Date"].'</td>';
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




