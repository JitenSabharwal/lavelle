<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>levelle Form Registration</title>
		<?php
			include_once('../include/inrlink.php');
		?>
	</head>
	<body>
	<?php
		include_once('../include/registerheader.php');
	?>
	<div id="container">
			<div class="container row">
				<div class="col l12 m12 s12">&nbsp;</div>

				<form action="" name="registerform" method="POST" class="col l12 m12 s12">
					
					<div class="input-field col l6 m6 s12">
			          <input id="firstName" type="text" name="firstName" required pattern="^[A-Za-z0-9_]{1,15}$">
			          <label for="firstName">First Name</label>
			        </div>

			        <div class="input-field col l6 m6 s12">
			          <input id="lastName" type="text" name="lastName" required pattern="^[A-Za-z0-9_]{1,15}$">
			          <label for="lastName">Last Name</label>
			        </div>

			        <div class="input-field col l6 m6 s12">
			          <input id="contact" type="number" name="contact" required pattern="[789][0-9]{9}">
			          <label for="regNo">Contact Number</label>
			        </div>

			        <div class="input-field col l6 m6 s12">
			         <input type="date" class="datepicker" required>
			          
			        </div>

			        <div class="input-field col l6 m6 s12">
			          <input id="username" type="email" name="email" required>
			          <label for="username">Email</label>
			        </div>

			        <div class="input-field col l6 m6 s12">
			          <input id="password" type="password" name="password" required pattern="[A-Za-z$_/-0-9]+">
			          <label for="password">Password</label>
			        </div>

			        <center>
          <button type="submit"  name="action" class="btn waves waves-effect waves-light reg">Submit</button><br><br>
			       
			        	<h6><a href="../login/login_index.php">Already Have Account? Sign-in Here.</a></h6>
			        </center>
			    </form>

			    <div class="col l3 m3 s12">&nbsp;</div>
			</div>
	</div>		
	</body>
</html>