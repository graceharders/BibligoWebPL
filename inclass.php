<?php session_start();?>
<!DOCTYPE html>
<body>
<?php
if (isset($_SESSION['user'])){
	$user = $_SESSION['user'];
	echo "You are logged in as " . $_SESSION['user'] . " (from session) <br></br>";
}
else
	echo 'Please <a href = "login.html"> Log in </a>';
?>
	<form action = "<?php $_SERVER['PHP_SELF']?>" method = "post">
	Who are you?</br>
	<textarea rows="3" cols="10" name="ans"></textarea>
	</br>
	<input type="submit"/>
	</form>
<?php
$ans = $feedback = NULL;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty($_POST['ans']))
		echo "<font color = 'red'> Answer the question bitch </font>";
	else{
		$ans = trim($_POST['ans']);
		$feedback = "Correct!";
	}
	$next_question = "question2.php";  // target component to process the request

if ($feedback != NULL)
{
   echo "<hr/>";
   echo "You answered <br/> <i>  $ans </i>  <br/> ";
   echo $feedback . "<br/>";
   echo "<a href= $next_question>Next question</a>";   
}
}
?>
</body>
</html>