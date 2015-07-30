<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>lavalle Networks</title>
		<?php
			include_once('include/links.php');
		?>
	</head>
	<body>
	
	<div class="main">	
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		 <nav>
			    <div class="nav-wrapper">
				
				      <a href="#!" class="brand-logo">&nbsp;<?php if(isset($_SESSION['username']))echo $_SESSION['username'];else header("location:login/login_index.php")?></a>
				      <ul id="dropdown1" class="dropdown-content">
						  <li><a class="men_link" href="#!">one</a></li>
						  <li><a class="men_link" href="#!">two</a></li>
						  <li class="divider"></li>
						  <li><a class="linkout" data-value="login/logout.php" href="#!">logout</a></li>
					</ul>

				      <ul class="right hide-on-med-and-down">
			        	<li style="margin-right:300px;">
				        	
						        <form >
							        <div class="input-field" >
								         <input id="search" type="search" style="width:400px" required>
								         <label for="search"><i class="material-icons">search</i></label>
							        </div>
							      </form>
					  		
				 		 </li>
				        <li><a class="addresume  modal-trigger" data-value="resume/upload.php" href="#"><i class="material-icons">add</i></a></li>
				        <li><a class="men_link" data-value="skills/skill.php" href="#"><i class="material-icons">view_module</i></a></li>
				        <li><a class="reload" href="#"><i class="material-icons">refresh</i></a></li>
				        <li><a class="dropdown-button" href="#" data-activates="dropdown1"><i class="material-icons">more_vert</i></a></li>
				    
				      </ul>
			    
			    </div>
		  </nav>
	<div class="menu_click">  
		  <div class="post">
		 		<?php include './post/post.php'; ?>
		  </div>
		  <div class="responseholder">

		  </div>
	</div>
	</div>
	<div id="modal1" class="modal">
    <div class="modal-content">
	      <h4>Comment Here</h4>
	    <div class="input-field col s6">
		          <i class="material-icons prefix">mode_edit</i>
		          <textarea id="icon_prefix2" class="materialize-textarea comit" style="width:350px" name="post" required></textarea>
		          <label for="icon_prefix2">Comment</label>
		      <button class="btn waves-effect waves-light combtn" style="font-size:10px;" name="action">Comment
			    <i class="material-icons" style="font-size:10px;">send</i>
			  </button>
			
		        </div>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat mclose">Agree</a>
	    </div>
  </div>	
	</body>
</html>