<?php
$connection = mysqli_connect('localhost','root','','sales');
if($connection){
    echo "we are connected";
}else{
    die('Database Connection fail');
}
$cust_id = $_REQUEST['ID'];
$sql = "DELETE FROM customer WHERE cust_id = $cust_id";
$result = mysqli_query($connection,$sql);

if($result){
echo "<script type = 'text/JavaScript'>";
echo "alert('ทำการลบข้อมูลสำเร็จ');";
echo "window.location = 'index_delete.php'";
echo "</script>";
}
?>