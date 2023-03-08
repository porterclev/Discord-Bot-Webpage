<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$MyTransform = $_POST["MyTransform"];
$LastPos = $_POST["LastPos"];
$sql = "INSERT INTO discord_unity_data(MyTransform, LastPos) VALUES ('" . $MyTransform . "', '" . $LastPos . "')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "MyTransform: [" . $MyTransform . "] ";
    echo "LastPos: [" . $LastPos . "]";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();
  
?>