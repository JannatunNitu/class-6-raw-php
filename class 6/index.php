<?php
// for each array
$veges = [
    "tomato",
    "potato",
    "Ginger",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for loop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<!-- numberChecker -->
        <div class="card" style="text-align: center; width:100%; padding: 60px 0;">
            <div class="div_title">
                <h1 style="color: #0B5ED7; margin-bottom:20px;">Number checker</h1>
            </div>
            <form action="./number_checker.php" method="get" >
                <input name="num" type="text" class="control-form" placeholder="Enter your number" style="margin-bottom: 20px; border:1px solid #ddd; width:300px; height:50px; border-radius: 10px;"><br>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
        
        <!--times table  -->
        <div class="card" style="text-align: center; width:100%; padding: 60px 0;">
            <div class="div_title">
                <h1 style="color: #157347; margin-bottom:20px;">Time table</h1>
            </div>
            <form action="./number_checker.php" method="get" >
                <input name="num" type="text" class="control-form" placeholder="Enter your number" style="margin-bottom: 20px; border:1px solid #ddd; width:300px; height:50px; border-radius: 10px;"><br>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
        <!-- Auth system -->
        <div class="login_form col-4 mx-auto" style="padding:40px 0;">
            <div class="formtitle">
                <h1 style="color:#0B5ED7; margin-bottom: 20px; text-align:center;">Login Page</h1>
            </div>
            <form action="./number_checker.php" method="post">
                <input name="email" type="text" placeholder="Enter your email" class="control-form" style="width: 100%; margin-bottom:10px; border-radius:5px; border:1px solid #ddd; height:40px;"> <br>
                <input name="password" type="text" placeholder="Enter your password" class="control-form" style="width: 100%; margin-bottom:10px; border-radius:5px; border:1px solid #ddd; height:40px;"><br>
                <button class="btn btn-primary" style="width:100%;">Login</button>
            </form>
        </div>

        <!-- prime number check -->
        <div class="card" style="text-align: center; width:100%; padding: 60px 0;">
            <div class="div_title">
                <h1 style="color: #0B5ED7; margin-bottom:20px;">Prime Number checker</h1>
            </div>
            <form action="./number_checker.php" method="get" >
                <input name="num" type="text" class="control-form" placeholder="Enter your number" style="margin-bottom: 20px; border:1px solid #ddd; width:300px; height:50px; border-radius: 10px;"><br>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
      

        <?php
         // select option
           echo "select option <br>";
           for($i = 2023; $i >= 1999; $i--){
               echo '<option value=""> '.$i.' </option>';
           
           }
         ?>
        </select>
        <!-- for each -->
         <ul>

        <?php
           foreach($veges as $vege){
               echo "<li>$vege</li>";
           }
        ?>

         </ul>

        </br>
        </br>
        </br>
        

        

    
</body>
</html>




<?php




// Intiaze
// condition
// increment/ decrement

echo "for loop<br>";
for($i = 1; $i <=10; $i++){
   echo "$i <br>";
};


// start mark create
$value = "*";
for($i = 1; $i < 11; $i++){
    echo str_repeat($value,$i) ."<br>";
}
for ($i = 10; $i >= 1; $i--){
    echo str_repeat($value,$i) ."<br>";
}

// time_table
$num = 25;
for($i = 1; $i <= 10; $i++){
    echo "$num * $i =". $num * $i ."<br>";
}

// factorial
$number = 3;
$result = 1;
for($i =1; $i <= $number; $i++){
    $result = $result * $i;
}
echo "The factorial is " . $result . "<br>";

// prime number
$numb = 13;
$result = 0;
for($i = 2; $i < $numb; $i++){
    if( $numb % $i == 0){
        $result++;     
    } 
}
if($result == 0){
    echo "$numb is prime number<br>";
} else{
    echo "$numb isn't prime number<br>";
}


// nested for loop
// even number + times table

$num = 2;
for($i = 1; $i <= $num; $i++){
    for($j = 1; $j <=10; $j++){
        echo "$i * $j = " .$i*$j."<br>";
    }
    echo "<br>";
}


?>