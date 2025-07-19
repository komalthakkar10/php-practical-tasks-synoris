<?php
//Remove first matching character from two strings

function removeFirstMatchingChar($str1, $str2) {
    $array1 = str_split($str1);
    $array2 = str_split($str2);

    // Keep removing first match until none left
    for ($i = 0; $i < count($array1); $i++) {
        for ($j = 0; $j < count($array2); $j++) {
            if ($array1[$i] === $array2[$j]) {
                unset($array1[$i]);
                unset($array2[$j]);
                // Reset both loops
                $array1 = array_values($array1);
                $array2 = array_values($array2);
                $i = -1; // reset outer loop
                break;
            }
        }
    }

    return implode('', $array1) . implode('', $array2);
}

// Test
echo removeFirstMatchingChar("Parth", "Paras"); // Output: tahs
?>
