<script>
		$(".upvote").bind('click',function(){
			var id=$(this).data("value");
			voteup(id);
			$(this).addclass("disabled");
			return false;
		});
		$(".downvote").bind('click',function(){
			var id=$(this).data("value");
			votedown(id);
			return false;
		});
		$(".commentbtn").on('click',function(){
			$('#modal1').openModal();
				
		});
		$(".combtn").click(function(){
			var id=$(".commentbtn").data("value");
			var c=$(".comit").val();
			console.clear();
			console.log(c+id);
			comment(c,id);
			$(".comit").val("");

			$('#modal1').closeModal();
			return false;
		});
		
		function comment(c,id)
		{
			var str="com="+c+"&id="+id;
			xml=createAjaxObj();
			xml.open("POST","./post/comment.php",false);
			xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xml.send(str);
			console.log(str);
			console.log(xml.responseText);
			return false;	
		}
	
	function voteup(postid)
	{
		str="postid="+postid+"&vote=up&submit=submit";
		xml=createAjaxObj();
		xml.open("POST",'./post/vote.php',false);
		xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xml.send(str);
		console.log(str);
		return false;
	}
	function votedown(postid)
	{
		str="postid="+postid+"&vote=down&submit=submit";
		xml=createAjaxObj();
		xml.open("POST",'post/vote.php',false);
		xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		console.log(str);
		xml.send(str);
	}
</script>
<?php
require_once("../classes/database.php");
require_once("../include/links.php");

?>
<?php
function display()
{
?>
	<table class='bordered hoverable' style='width:500px;margin-right:100px;border:grey 3px;margin-left:150px;' >
	 <tr style="background-color:lightgray"><th colspan="3"><?php echo $GLOBALS['user'];?></th></tr>
	<tr class="z-depth-1"><td rowspan="6" colspan="3"><p ><?php echo $GLOBALS['post'];?></p></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td rowspan="2"></td></tr>
	<tr><td>
		<button class="commentbtn active" data-value="<?php echo $GLOBALS['postid'];?>"><i class="material-icons">comment</i></button></td><td>
		<button data-value="<?php echo $GLOBALS['postid'];?>" class="upvote active"><i class="material-icons">thumb_up</i></button><?php echo $GLOBALS['upvote']?>&nbsp;
		<button data-value="<?php echo $GLOBALS['postid'];?>" class="downvote active"><i class="material-icons">thumb_down</i></button><?php echo $GLOBALS['downvote']?></td><td><i class="material-icons"></i></td></tr>
<?php
	$q="SELECT username,comment from comment where postid='".$GLOBALS['postid']."' ORDER BY timestamp DESC";
	$r=$GLOBALS['db']->selectData($q);
	if(mysqli_num_rows($r)>0)
	{
		echo "<tr style='background-color:lightblue'><th colspan='3'>Comments</th></tr>";
	
		while($com=mysqli_fetch_array($r))
		{
				$name=$com['username'];

				$cmt=$com['comment'];
	echo "<tr><td style='background-color:mediumturquoise;width:150px'>".$name." </td><td colspan='2'>".$cmt."</td></tr>";
				
		}
	}
?>

	</table>
	<br><br>
	<br><br>

<?php
}
?>
<?php
$db=new database();
$db->connect();
$query="SELECT * from post INNER JOIN users on (post.user=users.username) Order by post.timestamp desc limit 5 ";
$result=$db->selectData($query);
while($row=mysqli_fetch_array($result))
{
	$postid=$row['postid'];	
	$post=$row['post'];
	$user=$row['firstname']." ".$row['lastname'];
	$upvote=$row['upvote'];
	$downvote=$row['downvote'];
	display();
}	
?>
</table>