<?php function Row_Counts($connect)
{
   $result = $connect->query("SELECT count(*) as Count_Rows FROM test");
    while ($row = mysqli_fetch_assoc($result)) {
        printf ("%s", $row["Count_Rows"]);
    }
 mysqli_free_result($result);
}