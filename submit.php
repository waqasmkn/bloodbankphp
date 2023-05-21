<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get the form data
  $name = $_POST["name"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $bloodgroup = $_POST["bloodgroup"];
  $city = $_POST["city"];
  $cellno = $_POST["cellno"];
  $address = $_POST["address"];

  // Connect to the database
  $servername = "sql209.epizy.com";
  $username = "epiz_33922467";
  $password = "VtS6SqZchxHu4zv";
  $dbname = "epiz_33922467_bloodbank";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and execute the SQL query
  $sql = "INSERT INTO donors (name, age, gender, bloodgroup, city, cellno, address) VALUES ('$name', '$age', '$gender', '$bloodgroup', '$city', '$cellno', '$address')";
  if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>
