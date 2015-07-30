<script>
	$(document).ready(function(){
		$(".postbtn").bind('click',function(){
			var post=$(".postit").val(); 
			posting(post);
			$(".postit").val("");
		});
		return false;
	});
	function posting(post)
	{
			var str="post="+post+"&submit=submit";
			console.log(str);
			xml=createAjaxObj();
			xml.open("POST","./post/post_me.php",false);
			xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xml.send(str);
			switch(xml.responseText.trim())
			{
				case "false": 	alert("Connection Error..");
								break;					
			}
	}
</script>
<?php
	
?>
<html>
	<body>
			  <div class="row">
		        <div class="input-field col s6">
		          <i class="material-icons prefix">mode_edit</i>
		          <textarea id="icon_prefix2" class="materialize-textarea postit" style="width:350px" name="post" required></textarea>
		          <label for="icon_prefix2">Whats in your mind</label>
		      <button class="btn waves-effect waves-light postbtn" style="font-size:10px;" name="action">Post
			    <i class="material-icons" style="font-size:10px;">send</i>
			  </button>
			
		        </div>
		            
		      </div>
		      
	</body>
</html>