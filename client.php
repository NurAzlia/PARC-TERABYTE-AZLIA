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

if(isset($_POST['name'])) {
    $client_name = $_POST["name"];
    $client_noIC = $_POST["noic"];
    $client_noPhone = $_POST["Phone"];
    $client_address = $_POST["addr"];
    $client_email = $_POST["email"];

    $SQL = "INSERT INTO client (client_name, client_noIC, client_noPhone, client_address, client_email)
    VALUES ('$client_name', '$client_noIC', '$client_noPhone', '$client_address', '$client_email')";

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

      .next {
        background-color: #f1f1f1;
        color: black;
      }

      h2 {text-align: center;}
      form {text-align: center;}

      body {
        background-image: url('pets5.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>

    <h2>Client Forms</h2>

    <form autocomplete="off" method="post">
      <label for="Name">Name:</label><br>
      <input type="text" id="name" name="name" value=""><br>
      <label for="IC">IC Number:</label><br>
      <input type="int" id="noic" name="noic" value=""><br>
      <label for="Phone">Phone Number:</label><br>
      <input type="tel" id="Phone" name="Phone" value=""><br>
      <label for="Address">Address:</label><br>
      <input type="addr" id="Address" name="addr" value=""><br>
      <label for="Email">Email:</label><br>
      <input type="email" id="Email" name="email" value=""><br></br>
      <input type="submit" value="Submit"></a>
    </form></br>

    <a href="procedure.php" class="previous">Previous</a>
    <a href="pet.php" class="next">Next</a>
  </body>
</html>
