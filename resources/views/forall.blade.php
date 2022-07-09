@extends('layouts.allmain')
@section('content')
<!DOCTYPE html>
<html>
<head>
<title>WEB PAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("/blood.jpg");
  min-height: 65%;
}

.menu {
  display: none;
}
</style>
</head>
<body>



<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
  <p>Please <a href="/login">login</a> to use all the features and make yourself validate.</p>
    <br>
    <h5 class="w3-center w3-padding-30"><span class="w3-tag w3-wide">BLOOD GROUP</span></h5>
    <p><strong>Your little effort can give others second chance to live life. Donate blood and become a kind-person.</strong></p>
    <CENTER><img src="/blooddonor.jpeg" style="width:100%;max-width:400px;max-height:400px" class="w3-margin-top"></center>
    

   
    </p>
    
    
    <p><strong>Address:</strong> 15 Adr street, 5015, NY</p>
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">GIVE INFORMATION</span></h5>
    <p style="color:red"><a href="/login"><b>For use all the feature,you have to create an account. So that the information you give is validated. Click to Register</a></p></b>
    <p>


   
      <p><input class="w3-input w3-padding-16 w3-border" list="bloodgroup" placeholder="Blood Group..(A / B / AB / O)" required name="bloodgroup">
      <datalist id="bloodgroup">
    <option value="A+">
    <option value="B+">
    <option value="AB+">
    <option value="O+"> 
    <option value="A-">
    <option value="B-">
    <option value="AB-">
    <option value="O-"> 
  </datalist>
</p>

      <p><input class="w3-input w3-padding-16 w3-border" type="date" placeholder="Last Donation Date" required name="date" value="Last Donation Time">Last Donation Time</p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Any Disorder(Specify them)" required name="disorder"></p>
      <p><button class="w3-button w3-cyan w3-hover-orange" type="submit">SUBMIT INFO</button></p>


    </p>
    
    
</div>





<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
<p>All rights reserved  &copy <a href="https://www.facebook.com/anjum.faisal.54/" title="Faisal Anjum" target="_blank" class="w3-hover-text-green">Faisal Anjum</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-blue", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>

@endsection


