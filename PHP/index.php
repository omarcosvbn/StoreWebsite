<!--------------Inicio de sessão-------------->
<?php    
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!--------------CSS-------------->
  <link rel="stylesheet" href="/CSS/layout-basics.css" />
  <link rel="stylesheet" href="/CSS/home.css" />

  <!--------------PHP-------------->
  <?php include 'config.php'; ?>

</head>


<body>
  <header>
    <div class="decor">
      <h1 id="neonText">TAPES INC.</h1>
    </div>
  </header>

    <!--ok n é assim mas tentativa -->
    <?php
      if(isset($_SESSION['username'])){
        include 'navbar-client.php';
      } if(!isset($_SESSION['username'])){
        include 'navbar.php';
      }
    ?>



  <main>
    <div>
      <h2>Novidades</h2>

      <a id="btn_Store" href="store.php"> See more </a> 

      <div id="albuns">
      <?php
            $sql = "SELECT title FROM album";
            $result = pg_query($conn, $sql);
            $fetch = pg_fetch_all($result);

            for( $i = 0; $i < count($fetch); $i++){
              echo "<div class=album>";

                  if(implode($fetch[$i]) === "The Way of All Flesh"){
                    echo '<img src="/IMAGES/twoaf.jpg" alt="The Way of All Flesh" width=300 height=300/>';
                  }
                  
                  if(implode($fetch[$i]) === "Terra Incognita"){
                    echo '<img src="/IMAGES/ti.jpg" alt="Terra Incognita" width=300 height=300/>';
                  }

                  echo "<h2>";
                    print_r(implode($fetch[$i]));
                  echo "</h2>";


                echo "</a>";
              echo "</div>";
            }
        ?>

      </div>
    </div>

  </main>
  
  <script src="/JS/home.js"></script>

</body>


</html>