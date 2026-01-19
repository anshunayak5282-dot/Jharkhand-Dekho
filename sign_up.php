<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jharkhand Dekho</title>
    <link rel="stylesheet" href="style_2.css">
</head>
<body>
        <h1>Jharkhand Dekho</h1>

        <div id="box">
            <!-- <p>Fill your details</p> p:first child class -->
            <!-- <p>Enter your details carefully</p> -->
             <form action="./sign_up.php" method="post">
             <label class="label-text">Full Name</label>
             <input type="text" class="input-field" name="name" placeholder="Enter your full name">

             <label class="label-text">Email</label>
             <input type="email" class="input-field" name="email" placeholder="xyz@gmail.com" >

            <label class="label-text">Mobile No</label>
             <input type="tel" class="input-field" name="mobile" placeholder="Enter Your Mobile No">

             <label class="label-text">Password</label>
             <input type="password" class="input-field" name="password" placeholder="Create Password">
              </form>
             <button type="submit" name="Cretae" id="submit-btn">Create</button>

             <br><br>

                 <a href="login.html">Already have an account?</a>
                
                </form>
        </div>
</body>
</html>

<!-- INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`) VALUES (NULL, 'anshu', 'anshu@gmail.com', '123456', '123456'); -->
   <?php
      include "dp.php";
      if(isset($_POST['Cretate'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        $sql="INSERT INTO users ( name, email, mobile, password) VALUES ( '$name', '$email', '$Mobile', '$password')";

        $result =mysqli_query($conn,$sql);
        if(!$result){
            echo   "error";
        }
        else{
            echo "connected";
        }
      }
   ?>