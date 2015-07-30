<script>
	$(".viewreq").click(function(){
		var user=$(this).data("value");
		$("#disp").load("addfriend/view.php?user="+user);
	});
	$(".sendreq").click(function(){
		alert("Part under contruction");
	});
</script>
<div id="disp">
<table class="hoverable">
<?php
	require_once("../classes/database.php");
	require_once("../classes/retrieval.php");
	if(isset($_REQUEST['frnd']))
	{
		echo "<tr><td>".$_REQUEST['frnd']."</td></tr>";
		$user=$_REQUEST['frnd'];
		$query="SELECT * from users where username='$user'";
		$db=new database();
		$db->connect();
		$result=$db->selectData($query);
		if(mysqli_num_rows($result)>0)
		{	
			echo "<tr><td><button data-value='$user' class='btn sendreq'>Send Friend Request</button> </td> <td><button data-value='$user' class='btn viewreq'>View Profile</button></tr>";
		}
		else
		{
			echo "<tr><td>No such person available</td></tr>";
		}
	}
	
?>
</table>
</div>