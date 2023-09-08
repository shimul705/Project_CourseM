<?php
// Establish a connection to the database
$host = "localhost";
$username = "root";
$password = "";
$database = "payment_data";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve the payment data from the database
$sql = "SELECT phone_number, trx_id FROM payment";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Paycheck</title>
</head>
<body>
  <h1>Payment Data</h1>

  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<p>Phone Number: " . $row["phone_number"] . "</p>";
      echo "<p>TRxID: " . $row["trx_id"] . "</p>";
      echo "<hr>";
    }
  } else {
    echo "No payment data found.";
  }

  // Close the database connection
  $conn->close();
  ?>
</body>
</html>
