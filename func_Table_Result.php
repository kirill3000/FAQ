<?php function Table_Result($connect)
{
	



echo'	  <script type="text/javascript">
   function changeFunc($i) {
	   
alert (i);
   }
  </script>';


$Filter =  $_POST['Filter']; 
$Types = $_POST['Types'];
$Git = $_POST['Git'];
$Q = mysqli_real_escape_string($connect, $_POST['Q']);
$A = mysqli_real_escape_string($connect, $_POST['A']);



if($_POST['add'])
{
$result =$connect->query("INSERT INTO test(Types,Mark_Git,Q, A) VALUES  ('$Types' ,'$Git','$Q','$A')");
header('Location: /index.php');
exit;
}
	
	
	
	
	
   $result = $connect->query("SELECT distinct
Id, 
Types,
Create_Date, 
Last_Change_Date, 
case when Mark_Git = 0 then 'NO' else 'Yes' end  as Mark_Git ,
Q, 
A
 FROM test where 1=1
 and (Types='$Filter' or '$Filter' = 'All')
 
 ");
 
 

$X =$connect->query("
SELECT 'All','Тип вопроса:' as name union
SELECT 'CH','CH' as name union
SELECT 'ZK','ZK' as name union
SELECT 'BI','BI' as name union
SELECT 'Func','Функции' as name union
SELECT 'Linux','Linux' as name
");

 
 
 

print '<table border="1" width = 1500px;  bgcolor="#A9A9A9">';
 print '<tr>
<th Width>Id</th>';
echo '<form method="post">';
echo '<th Width  = 250px >';
 echo '<select name="Filter" class="myInputT"  onchange="this.form.submit();"">';

  while ($row2 = mysqli_fetch_assoc($X)) {
{
    echo "<option value=".$row2['name'].">".$row2['name']."</option>";
}
}

    
print '</select>
</th>
<th Width>Создание</th>
<th Width>Githab</th> 
<th Width  = 300>Вопрос</th>
<th Width  = 600>Ответ</th>
</tr>';

  while ($row = mysqli_fetch_assoc($result)) {
    print '<tr>';
    print '<td>'.$row["Id"].'</td>';
    print '<td>'.$row["Types"].'</td>';
    print '<td>'.$row["Create_Date"].'</td>';
    print '<td>'.$row["Mark_Git"].'</td>';
    print '<td>'.$row["Q"].'</td>';
    print '<td>'.$row["A"].'</td>';

    print '</tr>';
}
print '</table>';
mysqli_free_result($result);
}



