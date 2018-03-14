<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href = "profile.css">
	<title>Sign in | Bibligo</title>
</head>
<body>
<div id = "backb">
<a href = "nBib.html"><img src = "bb.png" style = "width:5%; margin-left:10px;"></a>
<div id = "popup" style= "display:block; width: 112px; height: 35px; padding-left:3px; padding-top: 11px; margin-left: 3px;background-color: white; border: 3px solid black; border-radius: 10%">Click to go back</div></div>
<div class = "bib"><div style="text-align: center;"><img src = "BL.png"></div></div>
<div style = "text-align: center;">
<?php 
if (isset($_SESSION['user']))
{
   $user = $_SESSION['user'];
   echo "<h1>Welcome $user ! </h1>";
}
else  
   echo 'Please log in';

?>
</div>
<div style="text-align: center;"><a href = "profileform.html"><button>Edit profile</button></a></div>
<div class = "prof"><div style="text-align: center;"><img src = "default.jpg"></div></div>
<p style ="text-align:center;"><strong>Name:</strong> Jeffery Jones</p>
<p style ="text-align:center;"><strong>Age:</strong> 10</p>
<p style ="text-align:center;"><strong>Saved stories: Rocky Raccon, Cinderella, The Snow Queen</strong> </p>
<p style ="text-align:center; margin-bottom:30px;"><strong>Recommended stories: The Fresh Prince of Bel Air, Sleeping Beauty </strong></p>
<div style = "text-align:center;"><form action="logout.php" method="post">
     <fieldset>
       <input type="submit" value="Log out" />
    </fieldset>    
   </form></div>
<script>
	var bb = document. getElementById("backb");
	bb.onmouseover = function(){
		document.getElementById('popup').style.display = 'block';
	}
	bb.onmouseout = function(){
		document.getElementById('popup').style.display = 'none';
	}
</script>
</body>
</html>
