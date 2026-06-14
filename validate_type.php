<?php

function validateType($file)
{
    $extension = strtolower(
        pathinfo($file["name"], PATHINFO_EXTENSION)
    );

    switch ($extension) {
        case "pdf":
        case "doc":
        case "docx":
            return true;
        default:
            return false;
    }
}

?>
