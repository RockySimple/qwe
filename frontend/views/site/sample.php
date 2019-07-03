<html>
<body>
<form action="sample.php" method="get">
    <p>Строки: <input type="text" name="rows" /></p>
    <p>Столбцы: <input type="text" name="columns" /></p>
    <p><input type="submit" /></p>
</form>

<?php

echo '<table>';
$count = 1;

for($i = 0; $i < $_GET['rows']; $i++){
    echo '<tr>';
    for($j = 0; $j < $_GET['columns'];$j++){
        echo '<td>'.$count.'</td>';
        $count++;
    }
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>