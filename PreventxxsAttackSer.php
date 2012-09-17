<?php
$name = $_GET['name'];
//$StringName = (string) $name;
$StringName = strip_tags($name);
echo "Welcome $StringName<br>";
?>
