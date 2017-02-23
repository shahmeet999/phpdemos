<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
//$q = intval($_GET['q']);
$q = $_GET['q'];
echo $q;
$con = mysqli_connect('localhost','root','','medicine');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"medicine");
$sql="SELECT * FROM user_tbl WHERE email_id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['user_name'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['area'] . "</td>";
    echo "<td>" . $row['zipcode'] . "</td>";
    echo "<td>" . $row['mobile_no'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);

?>
</body>
</html>