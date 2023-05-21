<?php
// connect to the database

  $dbhost = "sql209.epizy.com";
  $dbuser = "epiz_33922467";
  $dbpass = "VtS6SqZchxHu4zv";
  $dbname = "epiz_33922467_bloodbank";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// check connection
if (!$conn) {
  die('Database connection failed: ' . mysqli_connect_error());
}

// retrieve search parameters from the form
$city = $_POST['city'];
$bloodgroup = $_POST['bloodgroup'];

// build the SQL query to retrieve the matching donors
$sql = "SELECT * FROM donors WHERE city='$city' AND bloodgroup='$bloodgroup'";
//$sql = "SELECT * FROM blood_donors WHERE city='Faisalabad' AND blood_group='A+'";

$result = mysqli_query($conn, $sql);

// check if any donors were found
if (mysqli_num_rows($result) > 0) {
  // display the donors in a table
  echo "<h2>Search Results</h2>";
  echo "<table border=1>";
  echo "<tr><th>Name</th><th>Age</th><th>Gender</th><th>Blood Group</th><th>City</th><th>Cell No.</th><th>Address</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['bloodgroup'] . "</td><td>" . $row['city'] . "</td><td>" . $row['cellno'] . "</td><td>" . $row['address'] . "</td></tr>";
  }
  echo "</table>";
} else {
  // display a message if no donors were found
  echo "<h2>No Donors Found</h2>";
}

// close the database connection
mysqli_close($conn);
?>
