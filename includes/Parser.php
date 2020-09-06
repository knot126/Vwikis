<?php
function sanitizeInput(string $data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function sanitizeArticle() {

}

function getGet(string $id, bool $sanitize = true) {
    if (array_key_exists($id, $_GET)) {
        return sanitizeInput($_GET[$id]);
    } else {
        return "not specified";
    }
}

function getPost(string $id) {
    return sanitizeInput($_POST[$id]);
}
?>
