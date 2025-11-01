<?php
include 'student_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $connection->query("DELETE FROM s_data WHERE student_id=$id");
}

header("Location: report.php"); // redirect back
?>