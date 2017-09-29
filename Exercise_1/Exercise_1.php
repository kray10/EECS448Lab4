<?php
function prod($x, $y) {
    $z = $x * $y;
    return $z;
}
echo "<table>";
for ($x = 1; $x <=100; $x++) {
  echo "<tr>";
  for ($y = 1; $y <= 100; $y++) {
    echo "<td>".prod($x, $y)."</td>";
  }
  echo "</tr>";
}
echo "</table>";

?>
