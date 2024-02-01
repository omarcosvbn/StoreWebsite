<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>

  <!--------------CSS-------------->
  <link rel="stylesheet" href="/CSS/layout-basics.css" />
  <link rel="stylesheet" href="/CSS/profile.css" />
</head>


<body>
  <main>
    <h1>Account</h1>
    <div id="menu">
      <div id="side-bar">
        <button type="button" onclick="clickData()">Personal Data</button>
        <button type="button" onclick="clickHistory()">Order History</button>
      </div>

      <div id="info">
        <div id="personal-data">
          <h2>Personal Data</h2>
              <?php
                echo 'Username: '.$_SESSION["username"].'<br>'; 
                echo 'Balance: '. $_SESSION["balance"] . "€ <br>" ;
                echo 'Password: '.$_SESSION["password"].'<br>';
                echo 'Email: '.$_SESSION["email"].'<br>';
                echo 'Name: '.$_SESSION["name"].'<br>';
              ?>
        </div>

    
        <div id="order-history">
          <h2>Order History</h2>
        </div>
      </div>
    </div>

    <a href = "logout.php" >
      <button id="logout">
        Click here to Logout 
      </button>
    </a>

  </main>

  <script src="/JS/profile.js"></script>

</body>


</html>