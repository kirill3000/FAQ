<?php function Table_Result($connect)
{
   $result = $connect->query("SELECT distinct
Id, 
Types,
Create_Date, 
Last_Change_Date, 
case when Mark_Git = 0 then 'NO' else 'Yes' end  as Mark_Git ,
Q, 
A
 FROM test");

print '<table border="1" width = 1500px;  bgcolor="#A9A9A9">';
 print '<tr>
<th Width>Id</th>
<th Width>Тип вопроса</th>
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