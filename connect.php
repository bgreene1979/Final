<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inisope Employee Directory</title>
  <Style> 
table,th,td {border:1px solid black;
border-collapse: collapse;}
th, td {padding: 5px}
</Style>
</head>
<body>
<?php
$servername = "millicentdagworth-mysqldbserver.mysql.database.azure.com";
$username = "bgreene79";
$password = "Bfreak79";
$dbname = "author";

// Create connection
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "{millicentdagworth-mysqldbserver.mysql.database.azure.com}", "{bgreene79}", {Bfreak79}, {author}, 3306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
</body>
</html>

$sql = "INSERT INTO User (firstname, password)
VALUES ('John', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>