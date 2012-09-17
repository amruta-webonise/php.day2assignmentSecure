<?php

    $Extentions = array(
    'image/png',
    'image/x-png',
    'image/gif',
    'image/jpeg',
    'image/pjpeg'
);

    $file = $_FILES['fileUpload'];

    if(!in_array($file['type'], $Extentions)) {
    echo "invalid file";
}


?>
