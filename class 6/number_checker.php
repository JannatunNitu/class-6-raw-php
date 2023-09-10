

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<!-- number checker -->
     <!-- <div class="main col-4 mx-auto" style="text-align:center; border: 2px solid #ddd; width:400px; height:100px;">
    <div class="title">
        <h1>Answer:</h1>
    </div>
    <div class="result">
    <?php

    //    $number = $_GET['num'];
       
    //    if($number % 2 == 0){
    //        echo "$number is even number";
    //    }else{
    //        echo "$number is odd number";
    //    }
       ?>
    </div>
    </div>  -->

    <!-- time table -->
    <!-- <div class="main col-4 mx-auto" style="text-align:center; border: 2px solid #ddd; width:400px; height:300px;">
    <div class="title">
        <h1>Time table :</h1>
    </div>
    <div class="result">
    <?php

       $number = $_REQUEST['num'];

       for($i=1; $i<=10; $i++){
        echo "$number * $i = " .$number * $i. "<br>";
       }
       
       ?>
    </div>
    </div> -->

    <!-- Auth system -->
    <div class="main col-4 mx-auto" style="text-align:center; border: 2px solid #ddd; width:400px; height:100px; margin-top:50px;">
    <div class="title">
        <h1>Login Page</h1>
    </div>
    <div class="result">
    <?php

       $email = $_REQUEST['email'];
       $password = $_REQUEST['password'];
       $checkEmail = 'admin@gmail.com';
       $checkPassword = 'nitu';

       if ($email == $checkEmail && $password == $checkPassword){
        echo "You are login";
       } else{
        echo " Incorrect email or password";
       }
       
       ?>
    </div>
    </div>


    <!-- Prime number checker -->
    <!-- <div class="main col-4 mx-auto" style="text-align:center; border: 2px solid #ddd; width:400px; height:100px; margin-top:50px;">
    <div class="title">
        <h1>Prime Number Check</h1>
    </div>
    <div class="result">
    <?php
       $number = $_REQUEST['num'];
       $result = 0;
         for($i = 2; $i < $number; $i++){
             if( $number % $i == 0){
                 $result++;     
             } 
         }
         if($result == 0){
             echo "$number is prime number<br>";
         } else{
             echo "$number isn't prime number<br>";
         }     
       ?>
    </div>
    </div>  -->

</body>
</html>

