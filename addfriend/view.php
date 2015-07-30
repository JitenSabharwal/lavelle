<?php
session_start();
	$user=$_REQUEST['user'];
	require_once("../classes/database.php");
	require_once("../classes/retrieval.php");
	$db=new database();
	$db->connect();
	$query="SELECT * from  skill where username='$user'";
	$result=$db->selectData($query);
	if(mysqli_num_rows($result)==0)
	{
		echo "No user details available";
	}
	else
	{
		while($row=mysqli_fetch_array($result))
		{
			$skill=$row['skill_id'];
			$head=$row['head'];
		}
		$record=$GLOBALS['skill'].".json";
		$head=$GLOBALS['head'];
		$jsondata = file_get_contents("../skill_content/".$record);
		
		$data=json_decode($jsondata, true);
		$id1 = $data[$head][0]['intro'];
		$id2 = $data[$head][0]['skill'];
		$id3 = $data [$head][0]["project"];
		$id4 = $data [$head][0]["project_Details"];
	?>
	<html>
		<title>
			Content
		</title>
		<script>
			console.clear();
		</script>
		<body>
			<h3>My skills</h3>
			<div class="row">
				    <div class="col s12">
				        <ul class="tabs" tabs>
				            <li class="tab col s3"><a class="active" href="#intro">About myself</a></li>
				            <li class="tab col s3"><a  href="#round">Projects</a></li>
				            <li class="tab col s3"><a href="#rules">Technical Skills</a></li>
				        </ul>
				    </div>
				    
				    <div id="intro" class="col s12">
				    		
				    		<table class="hoverable" >
				    		<tr>
				    		<td>
					    		<p>
					    			<?php echo $id1;?>
					    		</p>
						    </td>
					    	</tr>
				    	</table>
				    		

				    </div>

				    <div id="round" class="col s12">
					    	<table class="hoverable bordered">
					    	<tr>
					    		<th>Project Name</th><th>Project Details</th>
					    	</tr>
					    	<p>

					    		<?php 
					    			$round=explode(",",$id3[0]);
					    			$round_Details=explode(",",$id4[0]);
					    			$c=count($round);
					    			//echo $c;
					    			for($i=0;$i<$c-1;$i++)
					    			{
					    				echo "<tr><td><span><b>".$round[$i]."</b></span></td>";
					    				echo "<td><p>".$round_Details[$i]."</p></td></tr>";
					    			}
					    			
					    		 ?>
					    	</p>
					    </table>
					    			    
				    </div>
				    
				    <div id="rules" class="col s12">
				    	<table class="hoverable">
				    	<?php
				    	$rules=explode(",",$id2[0]);
				    	$c=count($rules);
				    	if(file_exists("../resume/uploads/".$_SESSION['sess_user'].".pdf"))
				    			echo "<tr><td><li><a href=resume/uploads/".$_SESSION['sess_user'].".pdf download>".$_SESSION['sess_user']."Resume</li></td></tr>";
				    		
				    	for($i=0;$i<$c-1;$i++)
				    	{
				    		echo "<tr><td><li>".$rules[$i]."</li></td></tr>";
				    	}
				    		
				    	?>
				    </table>
				    </div>
				    
				   
			</div>

		</body>
	</html>
	<?php
}
	?>