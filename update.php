<?php
$connection = mysqli_connect('localhost','root','','sales');
if($connection){
    echo "we are connected";
}else{
    die('Database Connection fail');
}

if (isset($_GET['submit'])){
    $cust_id = $_GET['cust_id'];
    $cust_fname = $_GET['cust_fname'];
    $cust_lname = $_GET['cust_lname'];
    $cust_address = $_GET['cust_address']; 
    $cust_tel = $_GET['cust_tel'];
    $cust_sex = $_GET['cust_sex'];
    $cust_email = $_GET['cust_email'];
    $query = "update customer set ";
    $query .= "cust_fname = '$cust_fname', ";
    $query .= "cust_lname = '$cust_lname', ";
    $query .= "cust_address = '$cust_address', ";
    $query .= "cust_tel = '$cust_tel', ";
    $query .= "cust_sex = '$cust_sex', ";
    $query .= "cust_email = '$cust_email' ";
    $query .= "where cust_id = $cust_id ";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('Query fail'.mysqli_error($connection));
    }

    $query = "select * from customer";
    $result = mysqli_query($connection,$query);
    if(!$result){
       die('Query fail'.mysqli_error());
    }
    echo "<table class='table table-striped table-success'>";
    echo "<tr>";
    echo "<th> cust id </th>";
    echo "<th> cust fname </th>";
    echo "<th> cust lname </th>";
    echo "<th> cust address </th>";
    echo "<th> cust tel </th>";
    echo "<th> cust sex </th>";
    echo "<th> cust email </th>";
    echo "<th> user id </th>";
    echo "</tr>";
    while($row = mysqli_fetch_array($result)){
    $cid = $row['cust_id'];
    $cfname = $row['cust_fname'];
    $clname = $row['cust_lname'];
    $caddr = $row['cust_address'];
    $ctel = $row['cust_tel'];
    $csex = $row['cust_sex'];
    $cemail = $row['cust_email'];
    $uid = $row['user_id'];
    echo "<tr>";
    echo "<td>". $cid."</td>";
    echo "<td>". $cfname."</td>";
    echo "<td>". $clname."</td>";
    echo "<td>". $caddr."</td>";
    echo "<td>". $ctel."</td>";
    echo "<td>". $csex."</td>";
    echo "<td>". $cemail."</td>";
    echo "<td>". $uid."</td>";
    echo "</tr>";
}
    echo "</table>";


}
?>
<meta charset="UTF-8">
<title>Show updated data</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
