<?php
    include '../classes/Library.php';
    $obj = new Library;
    // print_r($_POST);

    $name = $obj->conn->real_escape_string($_POST['book-name']);
    $genre = $obj->conn->real_escape_string($_POST['book-genre']);
    $author = $obj->conn->real_escape_string($_POST['book-author']);

    $obj->store_book($name, $genre, $author);
?>