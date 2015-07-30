<?php
require_once("../classes/database.php");
?>
<?php
$db=new database();
$db->connect();
$postid=$_REQUEST['postid'];
//echo $postid;
if(isset($_REQUEST['postid']))
{
		$query="SELECT * from post where postid='$postid'";
		$result=$db->selectData($query);
		while($row=mysqli_fetch_array($result))
		{
			$upvote=$row['upvote'];
			$downvote=$row['downvote'];
			//echo $upvote." ".$downvote;
		}
			if($_REQUEST['vote']=="up")
			{
				$GLOBALS['upvote']++;
				echo $GLOBALS['upvote'];
				$query="UPDATE post set upvote='".$GLOBALS['upvote']."' where postid='$postid'";
				$db->update($query);
				
			}
			else if($_REQUEST['vote']=="down")
			{
				++$GLOBALS['downvote'];
				//echo $GLOBALS['downvote'];

				$query="UPDATE post set downvote='$downvote' where postid='$postid'";	
				$db->update($query);
				
			}
			
				


}
?>