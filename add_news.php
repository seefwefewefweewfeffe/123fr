<?php 
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['text'];
    $date = date('Y-m-d H:i:s');

    if (!empty($title) && !empty($content)) {
        $query = "INSERT INTO news (date, title, content) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "sss", $date, $title, $content);
        mysqli_stmt_execute($stmt);
    }
}
mysqli_close($link);