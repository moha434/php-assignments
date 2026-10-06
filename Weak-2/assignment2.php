<?php
//  Su'aasha 1: Array hal-cabbaar ah 
echo "<h2>Su'aasha 1</h2>";
$a = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

echo "Elements: " . implode(", ", $a) . "<br>";

$total = 0; $even = 0; $odd = 0;
foreach ($a as $v) {
    $total += $v;
    if ($v % 2 == 0) $even += $v; else $odd += $v;
}
echo "Total = $total<br>";
echo "Total even = $even<br>";
echo "Total odd = $odd<br>";

$min = min($a);
$max = max($a);
$minPos = []; $maxPos = [];
foreach ($a as $i => $v) {
    if ($v == $min) $minPos[] = $i;
    if ($v == $max) $maxPos[] = $i;
}
echo "Minimum = $min at positions: " . implode(", ", $minPos) . "<br>";
echo "Maximum = $max at positions: " . implode(", ", $maxPos) . "<br>";

// Su'aasha 2: Associative 2D 
echo "<h2>Su'aasha 2</h2>";
$rows = ["Light", "Normal", "Dark"];
$cols = ["Red", "Green", "Blue"];
$colors = [];
foreach ($rows as $r) {
    foreach ($cols as $c) {
        $colors[$r][$c] = "$r $c";
    }
}
echo "<table border='1' cellpadding='6'><tr><th></th>";
foreach ($cols as $c) echo "<th>$c</th>";
echo "</tr>";
foreach ($colors as $r => $line) {
    echo "<tr><th>$r</th>";
    foreach ($line as $val) echo "<td>$val</td>";
    echo "</tr>";
}
echo "</table>";

//  Su'aasha 3: Square array
echo "<h2>Su'aasha 3</h2>";
$m = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6],
];
$n = count($m);

$oddSum = 0; $evenSum = 0; $all = 0;
$rowTot = array_fill(0, $n, 0);
$colTot = array_fill(0, $n, 0);
$diag1 = 0; $diag2 = 0;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $v = $m[$i][$j];
        $all += $v;
        if ($v % 2 == 0) $evenSum += $v; else $oddSum += $v;
        $rowTot[$i] += $v;
        $colTot[$j] += $v;
        if ($i == $j) $diag1 += $v;           // dhidibka weyn
        if ($i + $j == $n - 1) $diag2 += $v;  // dhidibka kale
    }
}

$mn = $m[0][0]; $mx = $m[0][0];
foreach ($m as $row) { $mn = min($mn, min($row)); $mx = max($mx, max($row)); }
$mnPos = ""; $mxPos = ""; $mnCount = 0; $mxCount = 0;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($m[$i][$j] == $mn) { $mnPos .= "[$i,$j], "; $mnCount++; }
        if ($m[$i][$j] == $mx) { $mxPos .= "[$i,$j], "; $mxCount++; }
    }
}

$w = $n + 2;
echo "<table border='1' cellpadding='6' style='text-align:center'>";
echo "<tr><td colspan='$w'>Total odd elements = $oddSum</td></tr>";
echo "<tr><td colspan='$w'>Total even elements = $evenSum</td></tr>";

// safka sare: diagonal 2, wadarta tiirarka, diagonal 1
echo "<tr style='background:#bbb'><td>$diag2</td>";
foreach ($colTot as $t) echo "<td>$t</td>";
echo "<td>$diag1</td></tr>";

// safafka elements-ka + wadarta safka dhinac kasta
for ($i = 0; $i < $n; $i++) {
    echo "<tr><td>{$rowTot[$i]}</td>";
    for ($j = 0; $j < $n; $j++) echo "<td>{$m[$i][$j]}</td>";
    echo "<td>{$rowTot[$i]}</td></tr>";
}

// safka hoose
echo "<tr style='background:#bbb'><td>$diag1</td>";
foreach ($colTot as $t) echo "<td>$t</td>";
echo "<td>$diag2</td></tr>";

echo "<tr><td colspan='$w'>Total all elements = $all</td></tr>";
echo "<tr><td colspan='$w'>Min element is: $mn in $mnCount positions: $mnPos</td></tr>";
echo "<tr><td colspan='$w'>Maximum element is: $mx in $mxCount positions: $mxPos</td></tr>";
echo "</table>";

// Su'aasha 4: Associative 2D (ardayda)
echo "<h2>Su'aasha 4</h2>";
$students = [
    "CA221" => ["Name" => "Mohamed Ahmed Ali", "Phone" => "0618440403", "Address" => "Laba Dhagax, Wardhiigley"],
    "CA223" => ["Name" => "Ahmed Abdi Jama",   "Phone" => "0617223201", "Address" => "Taleex, Hodan"],
    "CA225" => ["Name" => "Anzal Nur Adan",    "Phone" => "0616990276", "Address" => "Macmacaanka, Dharkeynley"],
];
echo "<table border='1' cellpadding='6'><tr style='background:#ddd'><th></th><th>Name</th><th>Phone</th><th>Address</th></tr>";
foreach ($students as $id => $info) {
    echo "<tr><th style='background:#ddd'>$id</th>";
    foreach ($info as $val) echo "<td>$val</td>";
    echo "</tr>";
}
echo "</table>";

// Su'aasha 5: Transcript
echo "<h2>Su'aasha 5</h2>";
$transcript = [
    "Semester 1" => [
        ["subject1", 9, 26, 10, 40, 85, "Pass"],
        ["subject2", 9, 26, 10, 40, 85, "Pass"],
        ["subject3", 9, 26, 10, 40, 85, "Pass"],
    ],
    "Semester 2" => [
        ["subject1", 9, 26, 10, 0, 45, "Fail"],
        ["subject2", 9, 26, 10, 40, 85, "Pass"],
        ["subject3", 9, 26, 10, 40, 85, "Pass"],
    ],
];
echo "<table border='1' cellpadding='6'>";
echo "<tr><th>Semester</th><th>Course</th><th>CW1</th><th>MidTerm</th><th>CW2</th><th>Final</th><th>Total</th><th>Status</th></tr>";
foreach ($transcript as $sem => $courses) {
    $first = true;
    foreach ($courses as $c) {
        echo "<tr>";
        if ($first) {
            echo "<td rowspan='" . count($courses) . "'>$sem</td>";
            $first = false;
        }
        foreach ($c as $cell) echo "<td>$cell</td>";
        echo "</tr>";
    }
}
echo "</table>";
?>
