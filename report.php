<?php
include 'student_db.php';
$sql= "SELECT * FROM s_data";

$result=$connection->query($sql);

echo "<h2>student list</h2>";
echo "<table border='1'>
<tr><th> student ID</th>
<th>Student Name</th>
<th>Address</th>
<th>Phone</th> 
<th>cource</th> </tr>";




if($result->num_rows > 0){
    while ($row=$result->fetch_assoc() ) {
        echo "<tr><td>".$row['student_id']."</td>
        <td>".$row['s_name']."</td>
        <td>".$row['address']."</td>
        <td>".$row['phone']."</td>
        <td>".$row['course']."</td>
        </tr>";
    }
    
}
else{
        echo "NO Student record";
    }
echo "</table>"
?>