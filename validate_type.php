<?php

function validateType($file)
{
    $allowed = ['pdf', 'doc', 'docx'];

    $ext = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

    return in_array($ext, $allowed);
}

?>
