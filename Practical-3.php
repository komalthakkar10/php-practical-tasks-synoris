<?php
//  Print 1 to 200 with xxx/yyy

for ( $i = 1; $i <= 200; $i++){
    if ($i % 4 == 0 && $i % 7 == 0) {
        echo "xxxyyy";
    } elseif ($i % 4 == 0) {
        echo "xxx";
    } elseif ($i % 7 == 0 ) {
        echo "yyy";
    } else {
        echo $i;
    }
    echo "<br>";
}

// output like 
// 1, 2, 3, xxx, 5, 6, yyy, xxx, 9, 10, ....199, xxx