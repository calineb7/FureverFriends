<?php 
      if($_SERVER['REQUEST_METHOD'] === 'POST')
      {
        if(isset($_POST["signUp"]))
        {
          $username = $_POST["username"];
          $password = $_POST["password"];
          

          $sameUsernameExists = false;
          if(file_exists("users.txt"))
          {
            $myfile = fopen("users.txt", "r");
            $arr = [];
            while(!feof($myfile)) 
            {
              $line = fgets($myfile);
              $userpass = explode(":", $line);
              $arr[$userpass[0]] = $userpass[1]; 
            }
            fclose($myfile);

            foreach($arr as $user => $pass)
            { 
              if($user == $username)
              {
                $sameUsernameExists = true;
                break;
              }
            }
          }
          
          

          $noErrors = true;

          $takenUsername = $usernameError = $passwordError = $status = "";
          if($sameUsernameExists)
          {
            $takenUsername = "Pick another username, that one has already been taken";
            $noErrors = false;
          }
          elseif(!preg_match("/^[a-zA-Z0-9]+$/", $username))
          {
            $usernameError = "Invalid Username";
            $noErrors = false;
          }
          if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[a-zA-Z0-9]{4,}$/", $password))
          {
            $passwordError = "Invalid password";
            $noErrors = false;
          }
          if($noErrors)
          {
            $myfile = fopen("users.txt", "a") or die("Unable to open file!");
            fwrite($myfile , $username . ":" .$password. "\n");
            fclose($myfile);

            $status = "successful account creation";
          }

          
          
        }
      }
?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="stylesheet.css">
    <meta charset="UTF-8">
    
    <title>Adopt don't shop!</title>

    <style>
        
        .formInfo{
    margin: 3% 30%; 
    padding: 5%;
    text-align: center;
}

.form-signin {
    max-width: 330px;
    padding: 15px;
}  

    </style>
 

</head>
<body>
    
    <?php include 'header_footer.php'; ?>

    <div id = "content-area" >
      <div class="formInfo">

        <h1 class="h4 mb-3 fw-normal">Sign up to FurEver Friends!</h1>
        <p style="margin-bottom: 0;">Username: cannot contain special characters</p>
        <p>Password: More than 4 characters at least 1 letter and digit</p>

        <form action="" method="post">
          <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
          <?php 
            if(!empty($takenUsername)) 
              echo "<p style='color:red;'>".$takenUsername . "</p>";

            elseif(!empty($usernameError))
              echo "<p style='color:red;'>". $usernameError . "</p>";
          ?>
          

          <input type="password" class="form-control" name="password" id="lastName" placeholder="Password">
          <?php 
            if(!empty($passwordError)) 
              echo "<p style='color:red;'>". $passwordError . "</p>";
          ?>
          

          <input class="w-100 btn btn-lg btn-primary mt-4" type="submit" name="signUp" value="Sign Up">

          <?php 
            if(!empty($status)) 
              echo "<h2 style='color:green;'>". $status . "</h2>";
          ?>

          </form>
      </div>
      
      

    </div>

  


    
 
</body>
</html>