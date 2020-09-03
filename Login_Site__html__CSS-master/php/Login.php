<?php

include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($db,$_GET['email']);
      $senha = mysqli_real_escape_string($db,$_GET['senha']); 
      
      $sql = "SELECT email, senha FROM cadastrar WHERE email = '$email' and senha = '$senha'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("email");
         $_SESSION['login_user'] = $email;
         
         header("location: ../Bem_Vindo.html");
         
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>