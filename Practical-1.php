<?php
//Matrix column sum & row multiplication

$matrix = [
    [1, 5, 8],
    [2, 3, 4],
    [6, 7, 9]
];

$rows = count($matrix);
$columns = count($matrix[0]);

//sum of each column
$sumOfColumn = array_fill(0, $columns, 0);  // index, num, value 

for ($i = 0; $i < $rows; $i++ ) {
    for ($j = 0; $j < $columns; $j++) {
        $sumOfColumn[$j] += $matrix[$i][$j];
    }
}

// Multiplication of each row
$rowMultiplication = [];

for ($i = 0; $i < $rows; $i++) {
    $newValue = 1;
    for($j = 0; $j < $columns; $j++) {
        $newValue *= $matrix[$i][$j]; 
    }
    $rowMultiplication[] = $newValue;
}

//Output

foreach ($sumOfColumn as $index => $value) {
    echo "Sum of column ".$index. ": $value<br>";
}

foreach ($rowMultiplication as $index => $val) {
    echo "Multiplication of row ".$index. ": $val <br>";
}
?>