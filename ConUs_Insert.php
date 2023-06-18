<!DOCTYPE html>
<html>
<head>
  <title>Contact US</title>
  <link rel="stylesheet" href="insert.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
  <h2>Contact Us</h2>

  <div class="full">
    <div class="row">
      <div class="column" style="background-color:#313131;">
        <!-- Background Image -->
        <img src="Photos/bk.png" alt="background img" srcset="">
      </div>
      <div class="column" style="background-color:#313131;">
        <div class="fulfom">
          <form id="contactForm" action="insert.php" method="POST">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" placeholder="Your name" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" placeholder="someone@gmail.com" required>
            </div>
            <div class="form-group">
              <label for="subject">Subject:</label>
              <input type="text" id="subject" name="subject" placeholder="subject" required>
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea id="message" name="message" placeholder="Write something.." required></textarea>
            </div>
            <div class="btnsent">
              <button type="submit" class="sendbtn">
                <div class="svg-wrapper-1">
                  <div class="svg-wrapper">
                    <!-- SVG Icon for the Send button -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                      <path fill="none" d="M0 0h24v24H0z"></path>
                      <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                    </svg>
                  </div>
                </div>
                <span>Send</span>
              </button>
            </div>
          </form>

        </div>
        </div>
      </div>
    </div>
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
  <script src="ConUs_Insert.js"></script>
</body>
</html>
