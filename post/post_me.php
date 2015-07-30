<?php
session_start();
require_once("../classes/database.php");
require_once("../classes/retrieval.php");
?>
<?php
		$user=$_SESSION['sess_user'];
	if(isset($_REQUEST['submit']))
	{
		echo "user";
		$db=new database();
		$db->connect();
		$rt=new retrieval();
		$postid=$rt->post();
		$post=$_REQUEST['post'];
		$user=$_SESSION['sess_user'];
		$query="INSERT INTO post(postid,post,user,upvote,downvote) VALUES('$postid','$post','$user',0,0)";
		if(empty($db->insertData($query)))
			echo "error";
	}
?>