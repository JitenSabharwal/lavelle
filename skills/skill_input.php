<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Webarch Form Registration</title>
	</head>
	<body>

	<div class="container row">
		<div class="col l12 m12 s12">&nbsp;</div>

		<form action="json.php" onsubmit="retrun false" method="POST" class="col l12 m12 s12">
				<div class="input-field col l2 m2 hide-on-small-only">&nbsp;</div>
				<div class="input-field col l8 m8 s12">
					<input id="heading" type="text" name="heading" class="heading" required >
		        	<label for="heading">Enter your Full Name </label>
				</div>
			
			<div class="input-field col l2 m2 hide-on-small-only">&nbsp;</div>

			<div class="input-field col l6 m6 s12">
			    <select>
			    	<option value="" disabled selected>Choose your option</option>
			    	<option value="intro">Write about yourself</option>
			    	<option value="skill">Technical Skills</option>
			    	<option value="projects">Projects</option>
			    </select>
			</div>

			<div class="input-field col l6 m6 s12">
				<div class="intro content card">
					<textarea id="intro" class="materialize-textarea introText" name="intro" placeholder="Introduction" required></textarea>
				</div>

				<div class="skill content">
					<div class="skillwrap">
						<textarea class="materialize-textarea skillName" name="skill[]" placeholder="Enter here.." required></textarea>
					</div>

					<center>
						<a class="addskill btn waves waves-effect"><i class="fa fa-plus-circle"></i> New skill</a>
					</center>
				</div>

				<div class="projects content">
					<div class="projectWrap">
						<div class="card">
							<input type="text" name="r[]" placeholder="Project Title" class="projectName" required>
							<textarea class="materialize-textarea projectDetails" name="rt[]" placeholder="Project Details" required></textarea>
						</div>
					</div>

					<center>
						<a class="addproject btn waves waves-effect"><i class="fa fa-plus-circle"></i> Add Project</a>
					</center>
				</div>

				</div>
			</div>


			<div class="col l12 m12 s12">
				<br><br>
				<center>
					<a class="btn center waves waves-effect nextStep" type="submit">Next Step <i class="fa fa-angle-right"></i></a>
				</center>
			</div>
	    </form>
	    <div class="col l3 m3 s12">&nbsp;</div>
	</div>
		
	</body>
</html>