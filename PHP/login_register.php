<!DOCTYPE html>
<html lang="en">

 <!--======================================HEAD===========================================-->
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!--------------TITULO NA TAB FAZER ALTERAR COM JS------------------------------------------------------------------------------------------------------------------------------>
    <title>Login</title>

    <!--------------CSS-------------->
    <link rel="stylesheet" href="/CSS/layout-basics.css" />
    <link rel="stylesheet" type="text/css" href="/CSS/login_register.css">
    <link rel="stylesheet" type="text/css" href="/CSS/navbar-login.css">
   </head>


 <!--======================================BODY===========================================-->
<body>
    <main>
    
    <div class="decor">
        <!-- caixa para os forms e botoes -->
        <div class="caixa">
            


            <!------------------Button and respective LOGIN form------------->
            <button type="button" class= "button_LR" id="button_login" onclick="clickL()">
                LOGIN
            </button>

       
            <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>" id="login" >      <!-- mas só ir para a inex php quando o user e a password tiverem na data base-->
                <input type="text" class="input_box" name="username_login" placeholder="Username" required><br>
                <input type="password" class="input_box" name="password_login" placeholder="Password" required><br>

                <input type="submit" value="Login" class = "confirm" name="verify_login"> <!--botão de submissão do form-->
            </form>


            <!------------------Button and respective REGISTER form------------->
            <button type="button" class= "button_LR" id="button_register" onclick="clickR()">
                REGISTER
            </button>

            <form method="post" id="register">
                <!--<form action="/action_page.php">   para mandar pra pagina action page-->
                <input type="text" class="input_box" name="name" placeholder="Your Name" required>
                <input type="text" class="input_box" name="username_register" placeholder="Username" required><br>
                <input type="email" class="input_box" name="email_register" placeholder="Email" required><br>
                <input type="password" class="input_box" name="password_register" placeholder="Password" required><br>
                <input type="password" class="input_box" name="password_register_confr" placeholder="Confirm password" required>

                <input type="submit" value="Register" class = "confirm" name="verify_register">
            </form>
            
            </div>

        </div>
    </main>

    <!----------------- JS ---------------->
    <script src="/JS/login_register.js"> </script>


    </body>
</html>