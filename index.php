<?php
$servername = "172.18.0.3";
$username = "root";
$password = "trucorp123";
$dbname = "Trucorp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nama, kantor FROM users";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["nama"]. " " . $row["kantor"]. "<br>";
    $count++;
  }
  echo "Users: " . $count;
} else {
  echo "0 results";
}
$conn->close();
?>

