<?php
function sanitizeInput(string $data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function sanitizeArticle() {

}

function getGet(string $id) {
    return sanitizeInput($_GET[$id]);
}

function getPost(string $id) {
    return sanitizeInput($_POST[$id]);
}
?>
