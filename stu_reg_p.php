<?php
include 'student_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id         = $_POST['student_id'];
    $name       = $_POST['name'];
    $address      = $_POST['address'];
    $phone      = $_POST['phone'];
    $course     = $_POST['course'];

    $sql = "INSERT INTO s_data (student_id,s_name, address,phone,course) 
            VALUES ('$id ', '$name ', '$address',' $phone ','$course ')";

    if ($connection->query($sql) === TRUE) {
        echo "Registration Success <br>";
        echo "<a href='stu_reg.html'> Go Back</a>";
    } else {
        echo "Error: " . $connection->error;
    }
}
?>