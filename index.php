<?php include_once ("func_First_Param.php");
 include_once ("func_Conn.php");
 include_once ("func_Add_Rows.php");
 include_once ("func_Row_Counts.php");
 include_once ("func_Table_Result.php");
 include_once ("func_Rand.php");?>






<html>
<head>
<!-- Yandex.Metrika informer -->



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


<style type="text/css">
#block1
{
 position: absolute; /* Относительное позиционирование */
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
width:250px;
background-color: #ff0ff0;
   position: absolute; /* Абсолютное позиционирование */
 left: 700px; /* Сдвиг слоя вправо */
    top: 50px; /* Смещение слоя вниз */
	text-align: left;


}


#block4
{
position: absolute; /* Относительное позиционирование */
    float: left; /* Совмещение колонок по горизонтали */
    width: 10px; /* Ширина слоя */
    height:10px;
   background: #800000;
    color: white; /* Цвет текста */
 left: 5px; /* Сдвиг слоя влево */
    top: 30px; /* Смещение слоя вниз */
	text-align: right;
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



<?php 
$X =$connect->query("
SELECT '','' as name union
SELECT 'CH','CH' as name union
SELECT 'ZK','ZK' as name union
SELECT 'BI','BI' as name union
SELECT 'Func','Функции' as name union
SELECT 'Linux','Linux' as name
");
?>




Выбрать тип вопроса:
<select name="Types" class="myInputT" required>
<?php 
while ($row = mysqli_fetch_assoc($X))
{
    echo "<option value=".$row['name'].">".$row['name']."</option>";
}
?>        
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


<a href="https://metrika.yandex.ru/stat/?id=50797789&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/50797789/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="50797789" data-lang="ru" /></a>

Записей в базе: <?php Row_Counts($connect);?>

</div>







<div id="block4" >
 <?php Table_Result($connect);?>
 <?php $connect->close(); ?>
</div>




</body>
</html>