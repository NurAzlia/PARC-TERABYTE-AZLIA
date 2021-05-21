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

if(isset($_POST['category'])) {
  $pet_category = $_POST["category"];
  $pet_gender = $_POST["gender"];
  $pet_name = $_POST["pname"];
  $pet_age = $_POST["page"];
  $pet_label = $_POST["plabel"];

  $SQL = "INSERT INTO pet (pet_category, pet_gender, pet_name, pet_age, pet_label)
  VALUES ('$pet_category', '$pet_gender', '$pet_name', '$pet_age', '$pet_label')";

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
        background-image: url('pets10.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>

    <h2>Pet Forms</h2>

    <form autocomplete="off" method="post">
      <label for="Category">Category:</label><br>
      <input type="category" id="category" name="category" value=""><br>
      <label for="Gender">Pet Gender:</label><br>
      <input type="text" id="Gender" name="gender" value=""><br>
      <label for="pname">Pet Name:</label><br>
      <input type="text" id="pname" name="pname" value=""><br>
      <label for="page">Pet Age:</label><br>
      <input type="int" id="page" name="page" value=""><br>
      <label for="plabel">Pet Label:</label><br>
      <input type="varchar" id="plabel" name="plabel" value=""><br></br>
      <input type="submit" value="Submit">
    </form></br>

    <a href="procedure.php" class="previous">Previous</a>
    <a href="booking.php" class="next">Next</a>
  </body>
</html>
