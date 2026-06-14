<?php

function validateSize($file)
{
    $maxSize = 2 * 1024 * 1024; // 2 MB

    if ($file["size"] > $maxSize) {
        return false;
    }

    return true;
}

?>
