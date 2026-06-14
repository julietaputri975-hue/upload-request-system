<?php
function validateType($file) {
    $allowed = ['pdf', 'docx'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    return in_array($ext, $allowed);
}
?>
