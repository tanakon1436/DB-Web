<?php
if (isset($_GET['submit'])){
 $userInput= $_GET['username'];
 $passwordInput = $_GET['password'];
 
$connection = mysqli_connect('localhost','root','','sales');
if($connection){
    echo "we are connected";
}else{
    die('Database Connection fail');
}

$query = "select * from customer WHERE user_id = '$userInput' AND password ='$passwordInput'";
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
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>Test DB Connect</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- <div class ="container">
        <div class="col-xs-6">
        <form action="checklogin.php" method="get">
            <div class="form-group">
               <label for="cust_id">รหัสลูกค้า</label>
               <input id="cust_id" name="cust_id" type="text" class="form-control">
            </div>
            <div class="form-group">
               <label for="cust_fname">ชื่อลูกค้า</label>
               <input id="cust_fname" name="cust_fname" type="text" class="form-control">
            </div>
             <p></p>
            <input type="submit" class="btn btn-primary" name = "submit">
        </form>
        </div>
        </div> -->
    </body>
</html>