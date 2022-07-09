<!DOCTYPE html>
<html>
<head>
<title>Blood Donate</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-cyan w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="/dashboard" class="w3-bar-item w3-button w3-hide-small w3-hover-cyan">Dashboard</a>
  <a href="/view" class="w3-bar-item w3-button w3-hide-small w3-hover-white">All Details</a>

    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-hover-red" title="Notifications">Account <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="/login" class="w3-bar-item w3-button w3-hover-pink">Login</a>
      <a href="/logout" class="w3-bar-item w3-button w3-hover-cyan">Logout</a>
      
    </div>
  </div>
  <a href="https://www.ssmcbd.net/" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="SSMC Website"><i class="">Sir Salimullah Medical College</i></a>
  <img src="/logo.png" style="width:100%;max-width:80px;max-height:100px" class="w3-bar-item w3-right"> 
</div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="/dashboard" class="w3-bar-item w3-button">Dashboard</a>
    <a href="/view" class="w3-bar-item w3-button">All Details</a>
    
    <a href="/login" class="w3-bar-item w3-button">Login</a>
    <a href="/logout" class="w3-bar-item w3-button">Logout</a>
    
  </div>
</div>
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag"><i>“Donate your blood for a reason, let the reason to be life”</i></span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">Donate<br>Blood</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Sandhani, Sir Salimullah Medical College</span>
  </div>
</header>

  </div>
</div>
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
