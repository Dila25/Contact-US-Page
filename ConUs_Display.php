<!DOCTYPE html>
<html>
<head>
  <title>Contact US</title>
  <link rel="stylesheet" type="text/css" href="display.css">
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <h2>Your Message Details</h2>
  <div class="full">
    <div class="row">
      <div class="column" style="background-color:#313131;">
        <img src="Photos/bk.png" alt="background img" srcset="">
      </div>
      <div class="column" style="background-color:#313131;">
        <div class="fulfom">
          <form id="contactForm" onsubmit="submitForm(event)">
            <!-- Hidden input field to store the message ID -->
            <div class="form-group">
              <input type="hidden" name="id" value="<?php include('Display.php'); echo $id; ?>"  >
              <!-- Label and input field for the name -->
              <label for="name" style="color:white;"> Name:</label>
              <input type="text" id="name" value="<?php echo $name; ?>" readonly>
            </div>
            <!-- Label and input field for the email -->
            <div class="form-group">
              <label for="email" style="color:white;">Email:</label>
              <input type="email" id="email" value="<?php echo $email; ?>" placeholder="someone@gmail.com" readonly>
            </div>
            <!-- Label and input field for the subject -->
            <div class="form-group">
              <label for="subject" style="color:white;">Subject:</label>
              <input type="text" id="subject" value="<?php echo $subject; ?>" placeholder="subject"  readonly>
            </div>
            <!-- Label and textarea for the message -->
            <div class="form-group">
              <label for="message" style="color:white;">Message:</label>
              <textarea id="message" placeholder="Write something.." readonly><?php echo $message; ?></textarea>
            </div>
                
            <div id="successMessage"></div>
                
            <!-- Delete and Update buttons -->
            <table>
              <tr>
                <td>
                  <!-- Delete button -->
                  <button class="delbtn" type="submit" name="delete" onclick="deleteRecord()">
                    <div class="svg-wrapper-1">
                      <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                          <g>
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path d="M4 8h16v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8zm2 2v10h12V10H6zm3 2h2v6H9v-6zm4 0h2v6h-2v-6zM7 5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2h5v2H2V5h5zm2-1v1h6V4H9z"/>
                          </g>
                        </svg>
                      </div>
                    </div>
                    <span>Delete</span>
                  </button>
                  </form>

                </td>
                <td class="fre"></td>
                <td>
                  <!-- Update button -->
                  <a href="ConUs_Update.php?id=<?php echo $id; ?>" class="update">
                    <div class="svg-wrapper-1">
                      <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                          <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                        </svg>
                      </div>
                    </div>
                    <span>Update</span>
                  </a>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
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
  <script src="Delete.js"></script>

</body>
</html>
