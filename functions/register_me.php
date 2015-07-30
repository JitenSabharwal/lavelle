<?php
	require_once("../classes/database.php");
?>
<?php
 function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

function unique_salt() {
 
    return substr(sha1(mt_rand()),0,22);
}

?>
<?php
	$username=$_REQUEST['username'];
	$db=new database();
	$db->connect();
	$query="SELECT * from users where username='$username'";
	if(mysqli_num_rows($db->selectData($query))>0)
	{
		echo "A";
	}
	else
	{
		//code for registration
		 if(!empty($_REQUEST["Submit"]))
		 { 
			//input

					$firstname=$_POST["firstname"];
					$lastname=$_POST["lastname"];
					$contact=$_POST['contact'];
					$email=$_POST['username']; 
				 	$pass=md5($_POST["password"]);
				 	$unique_salt = unique_salt();

				 	$hash = sha1($unique_salt . $pass);
				 	$encrypted = encryptIt($hash);
				 	//creation of object
				 	
				 	$db=new database();
					$db->connect();
					//encryption
				 	
				 	$encrypted = encryptIt($unique_salt);
				 	$unique_salt = $encrypted;
				 	
				 	
				 	$sql="INSERT INTO users( username , password,firstname, lastname  , salt ,contact   ) 
				 	   	  VALUES(  '$email' , '$pass' ,'$firstname', '$lastname' ,'$unique_salt' , '$contact')";
				   //	echo $sql;

				   	if(!empty($db->insertData($sql)))
				   		echo "true";
				   	else
				   		echo "false";
				   	$db->disconnect();
			}

	}
	
?>