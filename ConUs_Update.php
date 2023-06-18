<!DOCTYPE html>
<html>
<head>
  <title>Update Details</title>
  <link rel="stylesheet" type="text/css" href="update.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <script>
    // Function to display an alert box with the success message
    function showSuccessMessage() {
      alert("Record updated successfully");
      window.location.href = "ConUs_Display.php";
    }
  </script>
</head>
<body>
     <!--Header section-->
     <div class="header">
      <button class="button button1">Log In</button>
      <button class="button button2">Sign Up</button>

      <div class="user">
        <a href=" "><i class="fa fa-user"></i></a>
      </div>

      <input class="searchinput" type="text" placeholder="Search" />
      <button class="ser" type="submit"><ion-icon name="search-outline"></ion-icon></button>

      <img src="Photos/logo.png" class="logo" />

      <!-- <hr id="line2"> -->

      <div class="icon-bar">
        <a class="active" href=" ">Home</a>
        <a href=" ">Library</a>
        <a href=" ">Support</a>
        <a href=" ">About Us</a>
      </div>
      <!-- <hr id="line3"> -->
    </div>
  <!--/Header-->
  <br><br><br><br><br>
  <h2>Update Details</h2>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "contactdb";

  // Create a connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Check if form data is submitted
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      // Update query
      $sql = "UPDATE details SET name='$name', email='$email', subject='$subject', message='$message' WHERE id='$id'"; // Update the table name and the WHERE condition based on your specific requirements
      if ($conn->query($sql) === TRUE) {
        // Call the JavaScript function to display the success message
        echo '<script>showSuccessMessage();</script>';
    } else {
        echo "Error updating record: " . $conn->error;
    }
  }

  // Retrieve existing data
  $result = $conn->query("SELECT * FROM details ORDER BY id DESC LIMIT 1");

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      ?>

      <div class="full" >
        <div class="row">
          <div class="column" style="background-color:#313131;">
            <img src="Photos/bk.png" alt="background img" srcset="">
          </div>
          <div class="column" style="background-color:#313131;">
            <div class="fulfom">

              <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="form-group">
                  <label for="name" style="color:white;">Name:</label>
                  <input type="text" name="name" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>">
                </div>

                <div class="form-group">
                  <label for="email" style="color:white;">Email:</label>
                  <input type="email" name="email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>">
                </div>

                <div class="form-group">
                  <label for="subject" style="color:white;">Subject:</label>
                  <input type="text" name="subject" value="<?php echo isset($row['subject']) ? $row['subject'] : ''; ?>">
                </div>

                <div class="form-group">
                  <label for="message" style="color:white;">Message:</label>
                  <textarea name="message"><?php echo isset($row['message']) ? $row['message'] : ''; ?></textarea>
                </div>

                <div class="btn">
                  <button type="submit" class="update">
                    <div class="svg-wrapper-1">
                      <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                          <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                        </svg>
                      </div>
                    </div>
                    <span>Update</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
  <?php
  } else {
      echo "No data found.";
  }

  // Close the connection
  $conn->close();
  ?>

  <a href="ConUs_Insert.php" class="float">
    <i class="fa fa-envelope my-float"></i>
  </a>
  <div class="label-container">
    <div class="label-text">Contact US</div>
    <i class="fa fa-play label-arrow"></i>
  </div>
  <!--Footer-->
  <footer>
  <div class="bottomsection">
      <div class="details">
        <a href="#"><h3>Contact Us</h3></a>
        <a href="#"><h5>surfapp@gmail.com</h5></a>
      </div>
      <div class="details">
        <a href="#"><h3>Terms & Conditions</h3></a>
      </div>
      <div class="details">
      <a href="sitemap.html"><h3>Site Map</h3></a>
      </div>
      <div class="details">
        <a href="#"><h3>Join Us</h3></a>
        <a href="#"><h5>Sign Up</h5></a>
      </div>
    </div>
  </footer>
  <!--/Footer-->
  
  <!--Link JS file-->
  <script src="ConUs_Update.js"></script>
</body>
</html>
