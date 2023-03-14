<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$Roll= $_POST["roll"];
$ID = $_POST["id"];

$sql = "UPDATE discord_unity_data SET Roll_Value = '" . $Roll . "' WHERE ID = '" . $ID . "'";
if ($conn->query($sql) === TRUE) {
    echo "table updated created successfully";

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();
  
?>