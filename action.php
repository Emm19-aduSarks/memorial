
<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $servername = "us-cluster-east-01.k8s.cleardb.net";
  $username = "b586684df8c103";
  $password = "dce474c6";
  $dbname = "heroku_2a9e6c922e8e543";


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
      



// Check if the form was submitted
    if (isset($_POST['submit'])) {
        // Escape user inputs for security
        $tributeName = $conn->real_escape_string($_POST['tributeName']);
        $tributeMessage = $conn->real_escape_string($_POST['tributeMessage']);
    // Insert data into the database
    $sql = "INSERT INTO TributeAndName (Name, Message) VALUES ('$tributeName', '$tributeMessage')";

   
    if ($conn->query($sql) === TRUE) {
        echo '<script>
        window.history.go(-1); // Go back to the previous page
      </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    }

      // Close the database connection
      $conn->close();

        
?>