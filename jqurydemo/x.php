<?php 
$x1=$_GET['term'];

$con=mysqli_connect('localhost','root','','medicine'); 
$res=mysqli_query($con,"select * from user_tbl where user_name like '$x1%' ");
while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row['name'];
    }
     echo json_encode($data);


?>