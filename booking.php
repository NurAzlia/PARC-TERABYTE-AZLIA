<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homework";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['leaving'])) {
    $datetime_leaving_pet = $_POST["leaving"];
    $datetime_taking_pet = $_POST["taking"];
    $amount_booking = $_POST["amount"];
    $status_booking = $_POST["status"];

    $SQL = "INSERT INTO booking (datetime_leaving_pet, datetime_taking_pet, amount_booking, status_booking)
    VALUES ('$datetime_leaving_pet', '$datetime_taking_pet', '$amount_booking', '$status_booking')";

    $query = mysqli_query($conn, $SQL);
    if($query) {
        echo "";
    }else {
        echo "";
  }

}

$conn->close();
?>

<!DOCTYPE html>
<html>
  <body>
    <style>
      a {
        text-decoration: none;
        display: inline-block;
        padding: 8px 16px;
      }

      .previous {
         background-color: #f1f1f1;
         color: black;
      }
      
      h2 {text-align: center;}
      form {text-align: center;}

      body {
        background-image: url('pets7.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>

      <h2>Booking Forms</h2>

      <form autocomplete="off" method="post">
        <label for="datetime-local">Date & Time Leaving Pet:</label><br>
        <input type="datetime-local" id="datetime-local" name="leaving" value=""><br>
        <label for="datetime-local">Date & Time Taking Pet:</label><br>
        <input type="datetime-local" id="datetime-local" name="taking" value=""><br>
        <label for="Amount">Amount Booking:</label><br>
        <input type="decimal" id="Amount" name="amount" value=""><br>
        <label for="sbook">Status Booking:</label><br>
        <input type="text" id="sbook" name="status" value=""><br></br>
        <input type="submit" value="Submit">
      </form></br>

      <a href="procedure.php" class="previous">Previous</a>
  </body>
</html>