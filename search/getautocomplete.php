<?php
require_once("../classes/database.php");
	$db=new database();
	$db->connect();	
 $term=$_GET["term"];
 
 $query="SELECT * FROM users where username like '%$term%' order by username ";
 $result=$db->selectData($query);
 $json=array();


 
    while($student=mysqli_fetch_array($result)){
         $json[]=array(
                    'value'=> $student["username"]
                    
                        );
    }
 
 echo json_encode($json);
 
?>