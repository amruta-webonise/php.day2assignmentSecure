<?php
    $fileName=$_GET['name'];
    echo "<br/>given file name: $fileName<br/>";
    include ($fileName);
    echo "<br/>included file name: $fileName"; 
?>
