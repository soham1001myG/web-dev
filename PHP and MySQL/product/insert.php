<?php
$n2=$_POST["prodName"];
$n3=$_POST["price"];
$n4=$_POST["prodDescription"];
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
if($_REQUEST['btn_submit']=='INSERT'){
$sql = "insert into  product (productname, productprice, productdescription)
values ('$n2', '$n3','$n4')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
if($_REQUEST['btn_submit']=='DELETE')
{
    $sql = "delete from  product where productname='$n2'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}
mysqli_close($conn);
?>