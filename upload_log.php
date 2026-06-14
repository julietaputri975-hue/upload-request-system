<?php

function saveUploadLog($fileName)
{
    $log = date("Y-m-d H:i:s") . " - " . $fileName . PHP_EOL;
    file_put_contents("upload.log", $log, FILE_APPEND);
}

?>
