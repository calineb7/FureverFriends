<?php session_start();
if (!isset($_SESSION['username'])) {

  header('Location: login.php');
  exit();
}else{


}


if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  if (isset($_POST['submit'])) {


  $file = fopen('pets.txt', 'a') or die("Unable to open file!");

  $filePath = "pets.txt";
  $lines = count(file($filePath))+1;
  $username = $_SESSION["username"];


  $type = $_POST['type'];
  $breed = $_POST['pet-breed'];
  $ageCategory = $_POST['ageCategory'];
  $gender = $_POST['gender'];
  $dogFriendly = $_POST['dog-friendly'];
  $catFriendly = $_POST['cat-friendly'];
  $childFriendly = $_POST['child-friendly'];
  $reason = $_POST['textarea'];
  $name = $_POST['full-name'];
  $email = $_POST['email'];

  

  fwrite($file, $lines . ':'  . $username . ':' . $type . ':' . $breed . ':' . $ageCategory . ':' . $gender . ':' . $dogFriendly . ':' . $catFriendly . ':' . $childFriendly . ':' . $reason . ':' . $email . "\n");

 
  fclose($file);

  
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
        
        .form1{
            margin-left:230px;
        }

        .header0{
            color:black;
            font-size: 30px;
            font-weight: bolder;
            margin-left: 200px;
        }

        #comment {
            width: 50%;
            height: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .successmsg{
          margin-left:230px;
          color: green;
        }
       
    </style>

</head>
<body>

    
    <?php include 'header_footer.php'; ?>
    
    
<p class="header0"> Tell us about your pet!</p>

<?php


    if(isset($_POST["submit"])){
        echo "<h2 class='successmsg'>You have successfully submitted your pet</h2>";
    }
?>

    <form class="form1" action=" " method="post">
       
    <p><label >Cat or Dog?</label>
            <input type="radio" id="dog" name="type" value="dog" required>
            <label for="dog">Dog</label>
            <input type="radio" id="cat" name="type" value="cat">
            <label for="cat">Cat</label></p>

    
        
        <label>What's your pet's breed?</label>
        <input type="text" id="breed" name="pet-breed" required></p>
           


        <p><label for="age">What age category is your pet from?</label>
            <select name="ageCategory" id="age" required>
                <option value="0-1">0-1</option>
                <option value="2-4">2-4</option>
                <option value="4-7">4-7</option>
                <option value="7+">7+</option>
            </select></p>

       <p><label >What's your pet's gender?</label>
            <input type="radio" id="female" name="gender" value="female" required>
            <label >Female</label>
            <input type="radio" id="male" name="gender" value="male">
            <label >Male</label></p>


        <p><label >Does your pet get along with other dogs?</label></p>
        <input
            type="radio"
            id="yes-dog-friendly"
            name="dog-friendly"
            value="yes"
            required
          />
          <label for="yes-dog-friendly">Yes</label>
          <input type="radio" id="dog-no-friendly" name="dog-friendly" value="no" />
          <label for="dog-no-friendly">No</label>
        

        <p><label >What about cats?</label></p>
        <input
            type="radio"
            id="yes-cat-friendly"
            name="cat-friendly"
            value="yes"
            required
          />
          <label for="yes-cat-friendly">Yes</label>
          <input type="radio" id="cat-no-friendly" name="cat-friendly" value="no" />
          <label for="cat-no-friendly">No</label>
      


         
        <p><label >Do you think your pet is suitable for a family with small children?</label></p>
        <input
            type="radio"
            id="yes-suitable-child"
            name="child-friendly"
            value="yes"
            required
          />
          <label for="yes-suitable-child">Yes</label>
          <input
            type="radio"
            id="no-suitable-child"
            name="child-friendly"
            value="no"
          />
          <label for="no-suitable-child">No</label>

          <br><br>


          <label for="textarea">What else would you like to tell us about your pet?</label><br />
          <textarea id="textarea" name="textarea" rows="4" cols="50" required></textarea>
    
          <br><br>
        
          <label for="name">Name and last name:</label>
          <input type="text" id="name" name="full-name" required/>
    
          <br>
          <br>
    
          <label class="firstLabel" for="email">Enter your email:</label>
          <input type="email" id="email" name="email" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" />
    

          <br><br>

        <button id= "submit" type="submit" name="submit" value="Submit">Submit</button>
        <button type="reset" value="Reset">Reset</button>
        <br><br>

   
     
</form>
            

 
  

</body>
</html>







