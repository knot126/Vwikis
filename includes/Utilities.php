<?php

function wfSanitizeInput(string $data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function wfGet(string $id, bool $sanitize = true) : string {
    if (array_key_exists($id, $_GET)) {
        return wfSanitizeInput($_GET[$id]);
    } else {
        return "";
    }
}

function wfGetFromPost(string $id) : string {
    if (array_key_exists($id, $_POST)) {
        return wfSanitizeInput($_POST[$id]);
    } else {
        return "";
    }
}
