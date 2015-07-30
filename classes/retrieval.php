<?php 
// This class is for retrieving values from database
	require_once("database.php");
?>
<?php
	class retrieval
	{
			private $id;
			private $id_no;
			private $row;
			function __construct()
			{

			}
			function skill()
			{
				$db=new database();
				$db->connect();
				$this->id=mysqli_query($db->connection,"SELECT max(skill_id) as maximum from skill");
				while($this->row=mysqli_fetch_array($this->id))
				{
					if(empty($this->row['maximum']))
			        {
			          $this->id_no="SKIL00001";
			        }
			        else
			        {
				          if(intval(substr($this->row['maximum'], 8))==99999)
				          {
					            $str=substr($this->row['maximum'],0,8);
					            ++$str;
					            $this->id_no=$str.'00001';
				           
				          }
			          else
			           		 $this->id_no=++$this->row['maximum'];
			        }
			        
				}
				return $this->id_no;
			}
			function post()
			{
				$db=new database();
				$db->connect();
				$this->id=$db->selectData("SELECT max(postid) as maximum from post");
				while($this->row=mysqli_fetch_array($this->id))
				{
					if(empty($this->row['maximum']))
			        {
			          $this->id_no="POST00001";
			        }
			        else
			        {
				          if(intval(substr($this->row['maximum'], 8))==99999)
				          {
					            $str=substr($this->row['maximum'],0,8);
					            ++$str;
					            $this->id_no=$str.'00001';
				           
				          }
			          else
			           		 $this->id_no=++$this->row['maximum'];
			        }
			        
				}
				return $this->id_no;
			}
			function comment()
			{
				$db=new database();
				$db->connect();
				$this->id=$db->selectData("SELECT max(comid) as maximum from comment");
				while($this->row=mysqli_fetch_array($this->id))
				{
					if(empty($this->row['maximum']))
			        {
			          $this->id_no="COM00001";
			        }
			        else
			        {
				          if(intval(substr($this->row['maximum'], 8))==99999)
				          {
					            $str=substr($this->row['maximum'],0,8);
					            ++$str;
					            $this->id_no=$str.'00001';
				           
				          }
			          else
			           		 $this->id_no=++$this->row['maximum'];
			        }
			        
				}
				return $this->id_no;
			}
			
	}		
	//$rt=new retrieval();
	//echo $rt->newuser();
?>