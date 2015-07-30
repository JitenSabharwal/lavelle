<?php
	session_start();
	require_once("../classes/database.php");
	require_once("../classes/retrieval.php");
?>
<?php
$var2 = $_REQUEST["id"];
$head = $_REQUEST["head"];
?>
<?php
	
	$db=new database();
	$db->connect();
	$query="SELECT * from users where username='".$_SESSION['sess_user']."'";
	
	if(mysqli_num_rows($db->selectData($query))>0)
		{
			$query="SELECT * from skill where username='".$_SESSION['sess_user']."'";
			if(mysqli_num_rows($db->selectData($query))==0)
			{	
				$rt=new retrieval();
				$skill_id=$rt->skill();
				
				$userid=$_SESSION['sess_user'];
				$query="INSERT INTO skill (skill_id , username ,head ) VALUES( '$skill_id' , '$userid','$head') ";
				$db->insertData($query);
			}
			else
			{
				while($row=mysqli_fetch_array($db->selectData($query)))
				{
					$skill_id=$row['skill_id'];
					break;
				}
			}
		}
	else
		{
			echo "Daabse not updated"; 
		}


?>
<?php
			$targetfolder="../skill_content/";
			if(isset($GLOBALS['skill_id']))
			{
				if(!is_dir($targetfolder))		
				mkdir($targetfolder);
										
						if(!file_exists($targetfolder."/".$GLOBALS['skill_id'].".json"))
						{
							$path=$targetfolder."/".$GLOBALS['skill_id'].".json";
							$myfile = fopen($path, "w") or die("Unable to open file!");
							fwrite($myfile, $var2);
						}
						else
						{
							$path=$targetfolder."/".$GLOBALS['skill_id'].".json";
							$myfile = fopen($path, "w") or die("Unable to open file!");
							fwrite($myfile, $var2);	
						}		
			}

?>
<?php
			$db->disconnect();
?>
