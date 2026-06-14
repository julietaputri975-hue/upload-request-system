<?php

function uploadLog($fileName)
{
    $log = date("Y-m-d H:i:s") . " - " . $fileName . PHP_EOL;

    file_put_contents(
        "upload_log.txt",
        $log,
        FILE_APPEND
    );
}

?>
