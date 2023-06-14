<?php 
    session_start();
    session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="stylesheet.css">
    <meta charset="UTF-8">
    
    <title>Adopt don't shop!</title>
    
    

    <style>
      .logout{
    margin-top: 12%;
    margin-bottom: 12%;
    text-align: center;
}

    </style>
 
</head>
<body>
    
    <?php include 'header_footer.php'; ?>

   

    <div id = "content-area">
        <div class="logout">
            <?php 
                if(isset($_SESSION["username"]))
                {
                    echo "<p>Thank you <span style='font-weight:bold;'>". $_SESSION["username"] ."</span> you are officially logged out!</p>";
                }
                else
                {
                    echo "<p>You are not logged in!</p>";
                    echo "<p style='margin-top:8px;'>Create an account if you haven't already!</p>";
                }
            ?>  

            
        </div>
    </div>



    
 
</body>
</html>