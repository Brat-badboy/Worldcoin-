<?php
session_start();

// Function to get the coins balance from the database
function getCoinsBalance($phonenumber) {
    // Database connection details
    $HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='signupforms';


    // Initialize the coins variable with a default value
    $account = 0;

    // Create a new database connection
    $conn = new mysqli($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);

    // Check for a successful connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement to fetch the coins balance
    $sql = "SELECT account FROM registration WHERE phonenumber='$phonenumber'";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
       
        $stmt->execute();
        $stmt->bind_result($coins);
        
        if ($stmt->fetch()) {
            // Successfully fetched the coins balance
            // The $coins variable is automatically set by bind_result
        } else {
            // No result found, coins remain at the default value of 0
            $coins = 0;
        }
        
        $stmt->close();
    } else {
        die("Failed to prepare the SQL statement: " . $conn->error);
    }

    // Close the database connection
    $conn->close();

    // Return the coins balance
    return $coins;
}

// Ensure user is logged in and their ID is available in the session
if (isset($_SESSION['phonenumber'])) {
    $phonenumber = $_SESSION['phonenumber'];
} else {
    die("User ID is not set.");
}

// Get the user's coins balance
$coins = getCoinsBalance($phonenumber);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
<style>

.withdraw {
  width: 150px;
  height: 45px;
  right: 44px;
  margin-top: 20px;
  border: none;
  border-radius: 10px;
  background-color: black;
  color: whitesmoke;
  font-size: 18px;
  text-align: center;
}
body {
  background-color: aliceblue;
  text-align: center;
  align-content: center ;
    font-family:'roboto',sans-serif;
    
}
h1{
    text-align: center;
    padding-top: 15px;
}
form{
  width:360px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}

.digitaldollar{
  width: 100%;
  height: 120px;
  margin-top: 30px;
  border: none;
  border-radius: 20px;
  background-color: limegreen;
  color: whitesmoke;
  font-size: 20px;
  text-align: center;
}
.pi {
  width: 100%;
  height: 120px;
  margin-top:-18px;
  border: none;
  border-radius: 20px;
  background-color: rebeccapurple;
  color: goldenrod;
  font-size: 20px;
  font-style: bold;
  text-align: center;
    text-decoration: none;
}
.ice {
  width: 100%;
  height: 120px;
  margin-top:-18px;
  border: none;
  border-radius: 20px;
  background-color: blue;
  color: white;
  font-size: 20px;
  font-style: bold;
  text-align: center;
    text-decoration: none;
}
.x{
  width: 100%;
  height: 200px;
  margin-top:-18px;
  border: none;
  border-radius: 20px;
  background-color: black;
  color: whitesmoke;
  font-size: 20px;
  text-align: center;
}
.navbar {
  position: fixed;
  bottom: 0;
  width: 100%;
  background-color: purple;
  border-radius: 18px;
  text-align: center;
}

.navbar a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 14px;
  text-decoration: none;
  
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
  border-radius: 8px;
}
a{
  color:white;
  text-decoration: none;

}
.pi{
  color:goldenrod;
  text-decoration: none;

}
</style></head>
<body>
    
<br>
  <form action="">
    <table>
      <tr>
        <td>	<div class="Recharge_Wallet_balance">
  <h2>Recharge Wallet</h2>
  <h2>USDT: <span id="rechargewallet"><?php 
    echo htmlspecialchars($coins);?></span> </h2>
  </div</td>
  <td>	
  <div class="Wallet_balance">
  	  <h2>  Account Balance</h2>
  	  <h2>USDT: <span id="walletbalance">0</span></h2>
  	</div</td>
      </tr>
    </table>
  
     </form>
     
       <button class="withdraw" id="buyBtn"><a href="send.php">Send</a></button>
       <button class="withdraw" id="sellBtn"><a href="sell.php">Sell</a></button><br>
     <br><br>
     <button class="digitaldollar" id="digitaldollarBtn"><a href="trade.php"><h1>USDT</h1></a></button><br>
     <button class="ice" id="cryptoBtn"><a href="trade.php"><h1>ice</h1></a></button><br>
     <button class="pi" id="piBtn"><a href="trade.php" class="pi"><h1>Pi</h1></a></button><br>
     <button class="x" id="xBtn"><a href="trade.php"><h1>X</h1><p>The future</p></a> </button> <br>
     <h1></h1>
       </div>
<div class="navbar">
  <a  href="homepage.php">Homepage</a>
  <a href="trade.php">Trade</a>
  <a href="accounts.php">Account</a>
  <a href="wallet.php"> Wallet</a>
</div>
    
</body>
</html>
