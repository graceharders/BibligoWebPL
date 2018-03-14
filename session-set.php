<?php session_start(); ?>

<?php
function reject($entry)
{
   echo 'Please fill out BOTH username and password';
   exit();    
}

if (isset($_POST['user']))
{
   $user = trim($_POST['user']);
   if (empty($user))  
      reject('Username');
   
   if (isset($_POST['pwd']))
   {
      $pwd = trim($_POST['pwd']);
      if (empty($pwd))
         reject('Password');
      else
      {
         $_SESSION['user'] = $user;
         $_SESSION['pwd'] = $pwd;
         header('Location: profile.php');
      }
   }
}
else  
   header('Location: nBib.html');

?>