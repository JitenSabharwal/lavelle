<?php
	require_once("../classes/database.php");
	session_start();
?>
<?php
	$db=new database();
	$db->connect();
	$query="SELECT * from users where username='".$_SESSION['sess_user']."'";
	
	if(mysqli_num_rows($db->selectData($query))>0)
		{
			$query="SELECT * from skill where username='".trim($_SESSION['sess_user'])."'";
			$result=$db->selectData($query);
			if(mysqli_num_rows($db->selectData($query))>0)
			{
				while($row=mysqli_fetch_array($result))
				{
					$_SESSION['skill_id']=$row['skill_id'];
					$_SESSION['head']=$row['head'];
					break;
				}

				require_once('skill_display.php');	
			}
			else
			{
				require_once('skill_input.php');
			}
		}	
?>
