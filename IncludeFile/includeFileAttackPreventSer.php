<?php
    $fileName=$_GET['name'];
    $file = "xyz.html";
    echo "<br/>given file name: $fileName<br/>";
    include ($file);
    echo "<br/>included file name: $file"; 
?>
