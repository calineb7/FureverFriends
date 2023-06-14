<?php 
    session_start();



if (isset($_SESSION['username'])) {
 
  header('Location: form.php');
  exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    
  $username = $_POST['username'];
  $password = $_POST['password'];

  
  $users = file('users.txt', FILE_IGNORE_NEW_LINES);

  
  foreach ($users as $user) {
    list($existingUsername, $existingPassword) = explode(':', $user);
    if ($username == $existingUsername && $password == $existingPassword) {
      
        $_SESSION['username'] = $username;

      
      header('Location: giveaway.php');
      exit();
    }
  }


  $errorMessage = 'Invalid username or password';
}

?>

<style> 

body{
    text-align: center;
    background-color: antiquewhite ;
}

.btn {
  background: #9a42ff;
  background-image: -webkit-linear-gradient(top, #9a42ff, #9d7aff);
  background-image: -moz-linear-gradient(top, #9a42ff, #9d7aff);
  background-image: -ms-linear-gradient(top, #9a42ff, #9d7aff);
  background-image: -o-linear-gradient(top, #9a42ff, #9d7aff);
  background-image: linear-gradient(to bottom, #9a42ff, #9d7aff);
  -webkit-border-radius: 12;
  -moz-border-radius: 12;
  border-radius: 12px;
  font-family: Georgia;
  color: #ffffff;
  font-size: 11px;
  padding: 7px 14px 7px 14px;
  text-decoration: none;
}

.btn:hover {
  background: #6923eb;
  background-image: -webkit-linear-gradient(top, #6923eb, #7d51f5);
  background-image: -moz-linear-gradient(top, #6923eb, #7d51f5);
  background-image: -ms-linear-gradient(top, #6923eb, #7d51f5);
  background-image: -o-linear-gradient(top, #6923eb, #7d51f5);
  background-image: linear-gradient(to bottom, #6923eb, #7d51f5);
  text-decoration: none;
}

.login{
    padding-top: 100px;
    border: dashed;
    padding-top: 20px;
    padding-bottom: 20px;
    margin-top:200px;
}
</style>

<div class="login">
<h1>Login to your account!</h1>
<form method="post">
  <label>Username:</label>
  <input type="text" name="username"><br>

  <label>Password:</label>
  <input type="password" name="password"><br>

  <?php if (isset($errorMessage)): ?>
    <p style="color: red"><?php echo $errorMessage ?></p>
  <?php endif; ?>
  <br><br>

  <button type="submit" class="btn">Login</button>
</form>
  </div>



    

  


  

   



