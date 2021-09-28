<?php
$arr = [1, 2, 5, 6, 7, 8];
$searchElement = 5;
$flag = true;
for($i = 0; $i < 6; $i++) {
    if($i == $searchElement) {
        echo "Element found";
        $flag = false;
    }
}
if($flag) {
    echo "Element not found";
}
?>