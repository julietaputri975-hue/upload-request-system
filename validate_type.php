<?php

function validateType($file)
{
    // Cek apakah nama file tersedia
    if (!isset($file['name']) || empty($file['name'])) {
        return false;
    }

    // Daftar ekstensi yang diizinkan
    $allowedTypes = ['pdf', 'docx'];

    // Ambil ekstensi file
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    // Cek apakah file memiliki ekstensi
    if (empty($extension)) {
        return false;
    }

    // Validasi ekstensi
    return in_array($extension, $allowedTypes, true);
}

?>
