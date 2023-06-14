<!DOCTYPE html>

<?php
  if($_SERVER['REQUEST_METHOD'] === 'POST')
  {
    if(isset($_POST["findSubmit"]))
    {
      if(file_exists("users.txt"))
      {
        $myfile = fopen("pets.txt", "r");

        $postedBy = [];
        $petType = [];
        $breed = [];
        $ageCategory = [];
        $Gender = [];
        $getsAlongDog = [];
        $getsAlongCat = [];
        $getsAlongKid = [];
        $desc = [];
        $fullName = [];
        $email = [];

        while(!feof($myfile)) 
        {
          $line = fgets($myfile);
          if(!empty($line))
          {
            $petInfo = explode(":", $line);
            if($petInfo[2] == $_POST["types"])
            {
              array_push($postedBy, $petInfo[1]);
              array_push($petType, $petInfo[2]);
              array_push($breed, $petInfo[3]);
              array_push($ageCategory, $petInfo[4]);
              array_push($Gender, $petInfo[5]);
              array_push($getsAlongDog, $petInfo[6]);
              array_push($getsAlongCat, $petInfo[7]);
              array_push($getsAlongKid, $petInfo[8]);
              array_push($desc, $petInfo[9]);
              array_push($fullName, $petInfo[10]);
              //array_push($email, $petInfo[11]);
             
            }
            
          } 
        }
        fclose($myfile);
      }
    }
  }
?>


<html lang="en">
<head>
<link rel="stylesheet" href="stylesheet.css">
    <meta charset="UTF-8">
    
    <title>Adopt don't shop!</title>
    
    <style>
        

        .form1{
            margin-left: 230px;
        }

        .header0{
            color:black;
            font-size: 30px;
            font-weight: bolder;
            margin-left: 200px;
        }

        .matches{
            margin-left: 230px;
        }
       
    </style>


</head>
<body>
    
    <?php include 'header_footer.php'; ?>

   
    <p class="header0">Let's adopt!</p>
    <form class="form1" action="" method="post">
        
        <br />
        <br />

        <label>Pet Type:</label>
        <input type="radio" id="cat" name="types" value="cat" required />
        <label for="cat">Cat</label>
        <input type="radio" id="dog" name="types" value="dog" />
        <label for="dog">Dog</label>
  
        <br />
        <br />
  
        <label for="breed">Breed of dog or cat:</label>
        <input type="text" id="breed" name="pets-breed" required />
  
        <br />
        <br />
  
        <label for="age">What age category are you from?</label>
        <select name="ageCategory" id="age" required>
                <option value="0-1">0-1</option>
                <option value="2-4">2-4</option>
                <option value="4-7">4-7</option>
                <option value="7+">7+</option>
            </select>
  
        <br />
        <br />
  
        <label>Gender:</label>
        <input type="radio" id="female" name="gender" value="female" required/>
        <label for="female">Female</label>
        <input type="radio" id="male" name="gender" value="male" />
        <label for="male">Male</label>
        <input type="radio" id="other" name="gender" value="male" />
        <label for="other">Doesn't matter</label>
  
        <br />
        <br />
  
        <label>Do you need a friendly pet</label>
        <input type="radio" id="yes-friendly" name="friendly" value="yes" required />
        <label for="yes-friendly">Yes</label>
        <input type="radio" id="no-friendly" name="friendly" value="no" />
        <label for="no-friendly">No</label>
  
        <br />
        <br />
  
        <p>Thank you for taking the time to fill out our survey!</p>
        <input type="submit" value="Submit" name="findSubmit" />
        <input type="reset" value="Reset" />
  
        <br />
        <br />

      </form>
   
  
      <div class="matches">
        <?php
          if(isset($_POST["findSubmit"]))
          {
            echo "<script> document.querySelector('.fromForm').style.display = 'block';</script>";
            echo "<h2>THESE ARE THE BEST MATCHES FOR YOUR DESIRED PET</h2><br><br><br><br>";
            if(file_exists("../pets.txt"))
            {
              for($i=0; $i<sizeof($postedBy); $i++)
              {
                echo "<p>Posted By: " . $postedBy[$i] . " Petarama user</p><br>";
                echo "<p>Pet Type: " . $petType[$i] . "</p><br>";
                echo "<p>Breed: " . $breed[$i] . "</p><br>";
                echo "<p>Age Category: " . $ageCategory[$i] . "</p><br>";
                echo "<p>Gender: " . $Gender[$i] . "</p><br>";
                echo "<p>Gets Along With Other Dogs: " . $getsAlongDog[$i] . "</p><br>";
                echo "<p>Gets Along With Other Cats: " . $getsAlongCat[$i] . "</p><br>";
                echo "<p>Suitable For a Family With Small Children: " . $getsAlongKid[$i] . "</p><br>";
                echo "<p>Why Would You Love " . $postedBy[$i]. "'s Pet: " . $desc[$i] . "</p><br>";
                echo "<p>Name And Last Name: " . $fullName[$i] . "</p><br>";
                echo "<p>Email: " . $email[$i] . "</p><br><br><br><br>";
              }
            }
            else
              echo "<p>There are no matches to your desired pet.</p><br>";

          }  
        ?>
      </div>


</body>
</html>