<?php
$col = 1;
$row = 1;
  echo "<table>";
  echo "<td> 0 </td>";
for($row = 1; $row <= 100; $row++) {
    echo "<td> $row </td>";
    }
  for ($col = 1; $col <= 100; $col++){
    echo "<tr>";
    echo "<td> $col </td>"; 
    for ($row = 1; $row <= 100; $row++){
     // if($row == 0)  { echo "<td>" .$row. "</td>";}
      echo "<td>" .$col * $row. "</td>";
     
    }
      echo "</tr>";
  }
  echo "</table>";
?>
