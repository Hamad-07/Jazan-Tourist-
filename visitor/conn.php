<?php
$conn = mysqli_connect('localhost', 'root', '', 'jazan');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}