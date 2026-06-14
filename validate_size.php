<?php

function validateSize($file, $maxSizeMB = 2, &$error = null)
{
    if (!isset($file['size']) || $file['error'] !== UPLOAD_ERR_OK) {
        $error = "File upload tidak valid.";
        return false;
    }

    $maxSize = $maxSizeMB * 1024 * 1024;

    if ($file['size'] > $maxSize) {
        $error = "Ukuran file melebihi batas {$maxSizeMB} MB.";
        return false;
    }

    return true;
}
?>
