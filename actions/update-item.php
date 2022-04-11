<?php
    include '../classes/Library.php';
    $obj = new Library;

    $item_id = $obj->conn->real_escape_string($_GET['id']);
    $name = $obj->conn->real_escape_string($_POST['book-name']);
    $genre = $obj->conn->real_escape_string($_POST['book-genre']);
    $author = $obj->conn->real_escape_string($_POST['book-author']);

    $obj->update_book($item_id, $name, $genre, $author);
?>