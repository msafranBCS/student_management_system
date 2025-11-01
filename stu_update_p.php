<?php
    include 'student_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name    = $_POST['name'];
    $address    = $_POST['address'];
    $phone      = $_POST['phone'];
    $course     = $_POST['course'];

    $connection->query("UPDATE s_data SET s_name = '$name' , address = '$address', phone = '$phone', course = '$course' WHERE student_id=$id");
}

header("Location: report.php"); // redirect back
?>