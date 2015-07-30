<?php
require_once("../classes/database.php");
?>
<?php

?>
<?php
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
if(empty($user) || empty($pass))
{
	echo "No";
}
else
{
	$db=new database();
	$db->connect();
  $query="SELECT * from users where username='$user'";
	$result=$db->selectData($query);
  if(mysqli_num_rows($db->selectData($query))==0)
  {
      echo "No";
  }
  else
	{
		while($row=mysqli_fetch_array($db->selectData($query)))
          {
              	
                if(strcmp($row['username'],$user)==0 || strcmp($row['password'],md5($pass))==0)
                {
                	session_start();
                  $_SESSION['sess_user']=$user;
                  $_SESSION['username']=$row['firstname']." ".$row['lastname'];
                   //set session with username
                  echo "Yes";
                  break;
                }
                
		  }
	}
}		
?>