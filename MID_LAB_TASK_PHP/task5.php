<?php
echo "The odd numbers between 10 to 100:\n";
for($i = 10; $i < 100; $i++) {
    if($i % 2 == 1) {
        echo $i." ";
    }
}
?>