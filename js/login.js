var ruser;
$(document).ready(function(){
	
	$(window).load(function(){
		loadlink();
		console.clear();
	});
	$(".brand-logo").on('click',function(){
		location.reload();
	});
	$(".men_link").click(function(){
		var a=$(this).data("value");
		$(".menu_click").load(a);
		console.clear();
	});
	
	$(".linkout").bind('click',function(){
          logout();
    });   
	//search
	      $("#search").autocomplete({
	             source:'search/getautocomplete.php',
                 minLength:2
                    });
  //reload
	$(".reload").on('click',function(){
		loadlink();
		console.log("wor");
		console.clear();
	});
	//refreshing div
	
	$(".register").bind('click',function(){
		var url=$(this).data("value");
		window.open("../functions/"+url,"_self");

	});
	
	$(".loginbtn").bind('click',function(){
		var user=$("#login").val();
		var pass=$('#password').val();
		var email= /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/;
		
		if(user=="" )
		{
            $.fn.report('#login','Not a valid username. Must start with an alphabet.','red');
		}
		else if(pass=="")
		{
            $.fn.report('#password','Not a valid username. Must start with an alphabet.','red');

		}
		else
			{
				login(user,pass);
				return false;
			}
		
	});
	
	 $.fn.report=function(location,msg,color){
        
        $(location).html(msg).css({'color':color});
        $(location).slideDown(400);
    };


	$(".reg").bind('click',function(){
		var firstName=$('#firstName').val();
		var lastName=$('#lastName').val();
		var contact=$('#contact').val();
		var username=$('#username').val();
		var password=$('#password').val();
		if(firstName=="")
		{
            $.fn.report('#firstName','Not a valid username. Must start with an alphabet.','red');
		}
		else if(lastName=="")
		{
            $.fn.report('#lastName','Not a valid username. Must start with an alphabet.','red');
		}
		else if(contact=="")
		{
            $.fn.report('#contact','Not a valid username. Must start with an alphabet.','red');
		}
		else if(username=="")
		{
            $.fn.report('#username','Not a valid username. Must start with an alphabet.','red');
		}
		else if(password=="")
		{
            $.fn.report('#password','Not a valid username. Must start with an alphabet.','red');
		}else
		{
			register(firstName,lastName,contact,username,password);
			return false;
		}		
	});

	$(window).load(function(){
			console.clear();
		});
	
	
});
function login(user, pass)
{
	var str="user="+user+"&pass="+pass+"&Submit=Submit";
	xml=createAjaxObj();
	xml.open("POST","../verifcation/login_verify.php",false);
	xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xml.send(str);
	switch(xml.responseText.trim())
	{
		case "Yes" : 	ruser=user;
						window.open("../index.php","_self");
							break;
		case "No"  :	alert("Enter corect Username and Password");
							break;
	}
	return false;
}
function register(firstName,lastName,contact,username,password)
{
	var str="firstname="+firstName+"&username="+username+"&lastname="+lastName+"&contact="+contact+"&password="+password+"&Submit=Submit";
	xml=createAjaxObj();
	xml.open("POST","./register_me.php",false);
	xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xml.send(str);
	switch(xml.responseText.trim())
	{
		case "true" : 	window.open("../login/login_index.php","_self");
						break;
		case "A"  :		alert("User already Exists");
							break;
		case "false": 	alert("Incorrect Details");
						break;					
	}
	return false;	
}
function loadlink()
{
	$('.responseholder').load("./post/display_post.php");
}
function logout()
 {
 		  var str="&logout=logout";
          xml=createAjaxObj();
          xml.open("POST","login/logout.php",false);
          xml.send(str);
          window.open("login/login_index.php","_self");
          return false;
 }
$('.addresume').on('click',function(){
		 window.open("resume/index.php");
});

$(".adduser").on('click',function(e){
	var a=$(this).data("value");
	var user=$("#search").val();
	console.clear();
	e.preventDefault();
	console.log(a+"?frnd="+user);
	$("#modal2").load(a+"?frnd="+user);
	$("#modal2").openModal();
	$('#search').val("");
});

