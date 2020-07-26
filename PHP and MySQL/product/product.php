<html>

<head>
    <title>Add Student Details</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
      }

    // Create database
    $sql = "create database product ";
    if (mysqli_query($conn, $sql)) {
    console_log("Database created successfully");
    } else {
    console_log("Error creating database: " . mysqli_error($conn));
    }
    $dbname='product';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "create table product(
productid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
productname VARCHAR(30) NOT NULL,
productprice INT(10) UNSIGNED,
productdescription VARCHAR(200) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table student created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

    mysqli_close($conn);
    ?>

    <h2>
        St Francis Institute Of Technology
    </h2>
    <h3>
        Department of Computer Engineering
    </h3>

    <h4>
        Plz enter the Product Details in the below form
    </h4>

    <form action="insert.php" method="post">
        <table>
            <tr>
                <th>Enter Product Name:</th>
                <td><input type="text" name=prodName></td>
            </tr>

            <tr>
                <th>Enter Product Price:</th>
                <td><input type="text" name=price></td>
            </tr>

            <tr>
                <th>Enter Product Description:</th>
                <td><input type="text" name=prodDescription></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name=btn_submit value="INSERT">
                <span> </span>
                <input type="submit" name=btn_submit value="DELETE">
            </td>
            </tr>
        </table>
    </form>
</body>

</html>