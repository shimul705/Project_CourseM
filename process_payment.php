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

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $phone = $_POST["phoneNumber"];
  $trxId = $_POST["trxId"];

  // Insert the form data into the database
  $sql = "INSERT INTO payment (phone_number, trx_id) VALUES ('$phone', '$trxId')";
  if ($conn->query($sql) === TRUE) {
    echo "Payment data saved successfully.";
    
    // Display the button and text box
    echo '<button onclick="goToDashboard()" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;">Go to Dashboard</button>';
    echo '<input type="text" value="this is your password:Shimul@CourseM" style="background-color: #f0f0f0; border: 1px solid #ccc; padding: 10px; width: 300px;" readonly onclick="this.select();">';
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>

<script>
function goToDashboard() {
  window.location.href = "home.php";
}
</script>
