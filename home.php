<!DOCTYPE html>
  <html>
  <title>RAIN WATER HARVESTING</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <body id="myPage">

  <!-- Sidebar on click -->
  <nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
      <i class="fa fa-remove"></i>
    </a>
    <a href="#" class="w3-bar-item w3-button">Link 1</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
    <a href="#" class="w3-bar-item w3-button">Link 4</a>
    <a href="#" class="w3-bar-item w3-button">Link 5</a>
  </nav>

  <!-- Navbar -->
  <div class="w3-top">
    <?php include('header.php');?>
  </div>

  <div class="w3-display-container w3-animate-opacity">
   <img src="images\banner1.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
   <div class="w3-container w3-display-bottomleft w3-margin-bottom">
     <p class="w3-button w3-xlarge w3-theme w3-hover-teal">RAIN WATER HARVESTING</p>
   </div>
  </div>


  <!-- Modal -->

  <!-- Work Row -->
  <div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">
    <div class="w3-quarter">
      <h2>Rain Water Harvesting</h2>
      <p align="justify">Rainwater harvesting (RWH) is the collection and storage of rain, rather than allowing it to run off. Rainwater is collected from a roof-like surface and redirected to a tank, cistern, deep pit (well, shaft, or borehole), aquifer, or a reservoir with percolation, so that it seeps down and restores the ground water.</p>
    </div>
    <div align="center" class="w3-quarter">
      <img src="images\home1.jpg" alt="boat">
        <h4>Rain Water Harvesting</h4>
    </div>
    <div align="center" class="w3-quarter">
      <img src="images\home2.jpg" alt="boat">
        <h4>Rain Water Harvesting</h4>
    </div>
    <div align="center" class="w3-quarter">
      <img src="images\home2.jpg" alt="boat">
        <h4>Rain Water Harvesting</h4>
    </div>
  </div>

  <!-- Team Container -->
  <div class="w3-container w3-padding-64 w3-center" id="team">
  <h2>OUR TEAM</h2>
  <p>Meet the team - our office rats:</p>

  <div class="w3-row"><br>

  <div class="w3-quarter">
    <img src="images\login-icon-17.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Rohit Pandey</h3>
    <p>Web Designer</p>
  </div>

  <div class="w3-quarter">
    <img src="images\login-icon-17.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Ankur Pandey</h3>
    <p>Support</p>
  </div>

  <div class="w3-quarter">
    <img src="images\login-icon-17.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Yash Sakpal</h3>
    <p>Manager</p>
  </div>

  <div class="w3-quarter">
    <img src="images\login-icon-17.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Yash Dubey</h3>
    <p>Researcher</p>
  </div>

  </div>
  </div>


  <!-- Contact Container -->
  <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
    <div class="w3-row">
      <div class="w3-col m5">
      <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
        <h3>Address</h3>
        <p>Swing by for a cup of coffee, or whatever.</p>
        <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>MUMBAI, INDIA</p>
        <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 1234567890</p>
        <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
      </div>
      <div class="w3-col m7">
        <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="action.php" method="post">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input" type="text" name="Name" required>
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input" type="text" name="Email" required>
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input" type="text" name="Message" required>
        </div>
        <input class="w3-check" type="checkbox" checked name="Like">
        <label>I Like it!</label>
        <button type="submit" name="send" class="w3-button w3-right w3-theme">Send</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center" id="footer">
    <h4>Follow Us</h4>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
    <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
    <p>Powered by <a href="#footer" target="_blank">Group 5</a></p>

    <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
      <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>
      <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
      <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
  </footer>

  <script>
  // Script for side navigation
  function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
  }

  // Close side navigation
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }

  // Used to toggle the menu on smaller screens when clicking on the menu button
  function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }
  </script>

  </body>
  </html>
