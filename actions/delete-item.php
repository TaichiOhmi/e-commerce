<?php
    include '../classes/Library.php';
    $obj = new Library;

    $item_id = $obj->conn->real_escape_string($_GET['id']);

    $obj->destroy_book($item_id);
?>