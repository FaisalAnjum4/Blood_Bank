
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    *{
	padding: 0;
	margin: 0;
}
body{
  background: url(http://wrbbradio.org/wp-content/uploads/2016/10/grey-background-07.jpg) no-repeat center fixed;
  background-size: cover;
}

.container{
	background: #2d3e3f;
	width: 350px;
	height: 400px;
	padding-bottom: 20px;
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: auto;
  padding: 70px 50px 20px 50px;
}


.fl{
	float: left;
  width: 110px;
  line-height: 35px;
}

.fontLabel{
  color: white;
}

.fr{
	float: right;
}

.clr{
	clear: both;
}

.box{
	width: 360px;
	height: 35px;
	margin-top: 10px;
	font-family: verdana;
	font-size: 12px;
}

.textBox{
	height: 35px;
	width: 190px;
	border: none;
  padding-left: 20px;
}

.new{
  float: left;
}

.iconBox{
	height: 35px;
	width: 40px;
	line-height: 38px;
	text-align: center;
  background: #ff6600;
}

.radio{
	color: white;
	background: #2d3e3f;
	line-height: 38px;
}

.terms{
	line-height: 35px;
	text-align: center;
	background: #2d3e3f;
	color: white;
}

.submit{
	float: right;
	border: none;
	color: white;
	width: 110px;
	height: 35px;
	background: #ff6600;
	text-transform: uppercase;
  cursor: pointer;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */

}


</style>
</head>
<body>

<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Body of Form starts -->
  	<div class="container">
      <form method="post" action="" >
      {{@csrf_field()}}
        <!--First name-->
    		<div class="box">
          <label for="name" class="fl fontLabel"> Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="name" placeholder="Full Name"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


       
            <div class="box">
          <label for="address" class="fl fontLabel"> Address: </label>
    			<div class="fl iconBox"><i class="fa fa-address-card" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" name="address" maxlength="10" placeholder="Current Address" class="textBox" required>
    			</div>
    			<div class="clr"></div>
    		</div>

			<div class="box">
          <label for="batch" class="fl fontLabel"> Batch: </label>
    			<div class="fl iconBox"><i class="fa fa-address-card" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" name="batch" maxlength="10" placeholder="Batch" class="textBox" required>
    			</div>
    			<div class="clr"></div>
    		</div>

    		<!---Phone No.------>
    		<div class="box">
          <label for="phone" class="fl fontLabel"> Phone No: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" name="phone" maxlength="10" placeholder="Phone No." class="textBox" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Phone No.---->


    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="email"  name="email" placeholder="Email Id" class="textBox" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->


    		<!---Password------>
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="password" id="password" name="password" placeholder="Password" class="textBox" required>
						<br>
						
    			</div>
    			<div class="clr"></div>
				
    		</div>
    		<!---Password---->
            <div class="box terms">
			<input type="checkbox" onclick="myFunction()">Show Password
			<script>
	function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	</script>
    		</div>
    		<!---Gender----->
    		<div class="box radio">
          <label for="gender" class="fl fontLabel"> Gender: </label>
    				<input type="radio" name="gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="gender" value="Female" required> Female
    		</div>
    		<!---Gender--->


    		<!--Terms and Conditions------>
    		
    		<!--Terms and Conditions------>



    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit"  class="submit" value="SUBMIT">
    		</div>
    		<!---Submit Button----->
      </form>
	  
  </div>
  <!--Body of Form ends--->


  </body>
</html>

</html>

