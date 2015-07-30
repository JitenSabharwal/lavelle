<?php
session_start();
require_once("../classes/database.php");
require_once("../classes/retrieval.php");
?>
<?php
$db=new database();
$db->connect();
	$c=$_REQUEST['com'];
$postid=$_POST['id'];
if(isset($_REQUEST['id']))
{
	$c=$_REQUEST['com'];
	$username=$_SESSION['username'];
	$rt=new retrieval();
	$comid=$rt->comment();
	$query="INSERT INTO comment(comid,comment,postid,username) VALUES('$comid','$c','$postid','$username') ";
	$db=new database();
	$db->connect();
	$db->insertData($query);
}
?>