<?php
// Memanggil file fungsi dari teman-teman
require_once 'validate_size.php';
require_once 'validate_type.php';
require_once 'upload_log.php';

// Simulasi data file
$file = [
    "name" => "dokumen_tugas.pdf",
    "size" => 1500000, 
    "tmp_name" => "temp_file_path"
];

echo "<h3>Proses Upload Dokumen</h3>";

// 1. Cek Validasi Ukuran (Tugas Nadila)
if (!validateSize($file)) {
    echo "Gagal: Ukuran file melebihi batas maksimal.<br>";
} 
// 2. Cek Validasi Tipe File (Tugas Rara)
elseif (!validateType($file)) {
    echo "Gagal: Format file tidak diizinkan.<br>";
} 
// 3. Jika Lolos
else {
    echo "Status: File valid dan siap diupload.<br>";
    echo "Berhasil: File " . $file['name'] . " telah diupload.<br>";
    
    // Mencatat Log (Tugas Cici)
    uploadLog($file['name']);
    echo "Status: Aktivitas telah dicatat dalam log.<br>";
}
?>
