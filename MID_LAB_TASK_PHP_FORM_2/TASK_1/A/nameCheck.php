<?php
$name = $_REQUEST['myName'];
if(isset($_REQUEST['submit'])) {
    echo $name;
}
else {
    echo "Not given";
}
?>