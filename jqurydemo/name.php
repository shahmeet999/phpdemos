<?php 
$x1=$_GET['term'];

$con=mysqli_connect('localhost','root','','db_shopping'); 
$res=mysqli_query($con,"select * from user_tbl where u_name like '$x1%' ");
while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row['u_name'];
    }
     echo json_encode($data);


?>