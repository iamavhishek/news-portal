<?php
include '../include/config.php';
$from = $_GET['from'];
$id = $_GET['id'];

if (empty($from) && empty($id)) {
    header('location:dashboard.php');
} else {
    if ($from === 'post') {
        $sql = "DELETE FROM posts WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            header('location:posts.php');
        }
    }
    if ($from === 'category') {
        $sql = "DELETE FROM categories WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            header('location:categories.php');
        }
    }
    if ($from === 'user') {
        $sql = "DELETE FROM users WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            header('location:users.php');
        }
    }
}
?>