<!DOCTYPE html>
<html>
<head>
  <title>Confirm Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h2 {
      color: #333;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h2>Payment Confirmation</h2>

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

  // Fetch the data from the payment table
  $sql = "SELECT * FROM payment";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Phone Number</th><th>Transaction ID</th></tr>';

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
      echo '<tr>';
      echo '<td>' . $row["id"] . '</td>';
      echo '<td>' . $row["phone_number"] . '</td>';
      echo '<td>' . $row["trx_id"] . '</td>';
      echo '</tr>';
    }

    echo '</table>';
  } else {
    echo 'No payment data available.';
  }

  // Close the database connection
  $conn->close();
  ?>

</body>
</html>
