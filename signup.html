<?php
$succes=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $password=$_POST['password'];

//$sql="INSERT INTO registration(username,password)
//values('$username','$password')";
//$result=mysqli_query($con,$sql);

//if($result){
 //   echo "Data inserted successfully";
// }
// else{
//     die(mysqli_error($con));
// }
$sql="SELECT * FROM registration where phonenumber='$phonenumber'";

$result=mysqli_query($con,$sql);
if($result){
  $num=mysqli_num_rows($result);
  if($num>0){
    $user=1;
    // echo"User already exists";
  }else{
    $sql="INSERT INTO registration(username,phonenumber,email,password)
    values('$username','$phonenumber','$email','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
      $succes=1;
      header('location:login.php');
      //  echo "Signup successful";
      }else{
        die(mysqli_error($con));
      }
  }
}


}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>signup page</title>
    <style>
      body {
        background-color: aliceblue;
        text-align: center;
        align-content: center;
        font-family: " roboto" sans-serif;
        align-items: center;
      }
      .signupbox {
        width: 360px;
        margin: auto;
        border-radius: 8px;
        align-items: center;
        justify-content: center;
        background-color: aliceblue;
      }
      form {
        width: 360px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        align-items: center;
      }
      form label {
        display: flex;
        margin-top: 20px;
        font-size: 18px;
      }
      form input {
        width: 100%;
        padding: 8%;
        border: 1px solid gray;
        border-radius: 8px;
        outline: none;
        text-align: center;
      }
      button {
        width: 320px;
        height: 35px;
        margin-top: 20px;
        border: none;
        border-radius: 8px;
        text-align: center;
        background-color: limegreen;
        color: whitesmoke;
        font-size: 20px;
        cursor: pointer;
        align-self: center;
      }
      .balert {
        padding: 20px;
        background-color: #f44336; /* Red */
        color: black;
        margin-bottom: 15px;
        border-radius: 5px;
        width: 200px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        align-items: center;
    }
    .galert {
        padding: 20px;
        background-color: blue; 
        color: white;
        margin-bottom: 15px;
        border-radius: 5px;
        width: 200px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        align-items: center;
    }

    
    </style>
  </head>
  <body>
    <?php
    if($user){
      echo'<div class="balert">
      <strong>SORRY</strong>
      User already exist!  </div>
      ';
    }
    
    ?>
    <?php
    if($succes){
      echo'<div class="galert">
      <strong>CONGRATULATIONS</strong>
      Signup successful  </div>
      ';
    }
    
    ?>
    <div class="signupbox ">
      <h1>Sign up page
    
      </h1>
      <h2>To start claimimg your grants</h2>
      <form action="signup.php" method="post">
        <label for="fisrtname">Name</label>
        <input type="text" name="username" />
        <label for="email">Email</label>
        <input type="email" name="email" />
        <label for="phonenumber">Phonenumber</label>
        <input type="number" name="phonenumber" />
        <label for="password">Password</label>
        <input type="password" name="password" />
        
        <br />
        <p>
          By clicking the submit button you agree to our <br />
          <a href="a">terms and conditions</a> and
          <a href="a">policy and privacy</a>
        </p>
        <br />
        <button type="submit" value="submit">submit</button>
      </form>

      <br />
    </div>
    <p>Already having an account? <a href="login.php">Login here</a></p>
    <br />
  </body>
</html>
