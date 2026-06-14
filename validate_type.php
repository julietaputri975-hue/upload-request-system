<?php

function validateType($file)
{
    // ambil ekstensi file
    $extension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

    // validasi menggunakan switch case
    switch (true) {
        case ($extension == "pdf"):
            return true;

        case ($extension == "doc"):
            return true;

        case ($extension == "docx"):
            return true;

        default:
            return false;
    }
}

?>
