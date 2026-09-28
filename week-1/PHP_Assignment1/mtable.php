<?php
echo "<h3 style='text-align:center'>Multiplication Table</h3>";
echo "<table border='1' cellpadding='3' cellspacing='0' align='center'>";

for ($row = 1; $row <= 12; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 12; $col++) {
        echo "<td>" . ($row * $col) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
