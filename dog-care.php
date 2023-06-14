<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="stylesheet.css">
    <meta charset="UTF-8">
    
    <title>Adopt don't shop!</title>

    <style>

     


        #header1{
            font-weight: bolder;
            color: blueviolet;
            font-size: 70px;
            margin-left: 75px;
            margin-bottom:10px;
            margin-left:250px;
            margin-top:0px;
        }

        .welcome{
            width:50%;
            display:block;
            background-color: antiquewhite;
            margin-left:75px;
            margin-top:0px;
            margin-left:250px;
        }

        .column{
            width:20%;
            height: 300px;
            background-color: rgb(241, 218, 189);
            float: right;
            margin: 50px;
            margin-right:50px;
            margin-left: 50px;
        
            }

        .column:hover{
            color:rgb(241, 218, 189);
            background-color: rgb(223, 159, 255);
        }

         .picturedog{
            display: block;
            margin:0 auto;
            height:200px;
            width: 250px;
         }   

         .headers{
            text-align: center;
            color: blueviolet;
         }
        
    </style>
    


</head>
<body>
    
    <?php include 'header_footer.php'; ?>

    
  

    <p id="header1">Dog Care</p>
    <div class="welcome">Welcome to our dog care page! We are passionate about providing the best possible care 
        for our furry friends. Whether you're a first-time dog owner or a seasoned pro, you'll 
        find everything you need to keep your dog healthy, happy, and well-cared for. From expert 
        advice on nutrition and training, to a wide range of products to meet your every need, 
        we've got you covered. Thank you for choosing us to be a part of your dog's life and we look 
        forward to serving you and your beloved pet</div>

        
    <div class="column" >
        <a style="text-decoration: none;" href="GeneralDogDiet.php">
        <img src="pictures/dogeating.jpg" alt="dog picture" class="picturedog"  >
        <h3 class="headers"  >Dog Diet</h3></a>
        
    

    </div>

    <div class="column">
        <a style="text-decoration: none;" href="GeneralDogTraining.php" >
        <img src="pictures/dogtrain.jpg" alt="dog picture" class="picturedog"  >

       <h3 class="headers" style="text-decoration: none;" >Dog Training Advice</h3></a>
       

    </div>

    <div class="column">
        <a style="text-decoration: none;" href="GeneralDogCare.php" >
        <img src="pictures/dogrelax.jpg" alt="dog picture" class="picturedog"  >
        <h3 class="headers"  >General Dog Care</h3></a>
        

    </div>


   

</body>
</html>