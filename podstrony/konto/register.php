<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="ⓒ Księganet" >
    <link rel='icon' href='../../grafika/favicon.png'  sizes='200x200'>
    <title>Księganet</title>
    <link rel="stylesheet" href="../../css/register.css">
</head>
<body>
    <div id="regboard">
        <form action="../../skrypty/registercheck.php" method="post">
            Imie: <input type="text" name="name" id=""><br>
            <?php 
                if(isset($_SESSION['err_name'])) //check session error_name
                { 
                    echo '<span class="error">'.$_SESSION['err_name'].'</span>'; //printing error name
                    unset($_SESSION['err_name']); //unset error variable
                }
            ?>
            Nazwisko: <input type="text" name="surname" id=""><br>
            <?php 
                if(isset($_SESSION['err_surname'])) //check session error_name
                { 
                    echo '<span class="error">'.$_SESSION['err_surname'].'</span>';  //printing error name
                    unset($_SESSION['err_surname']); //unset error variable
                }
            ?>
            E-mail: <input type="email" name="email" id=""><br>
            <?php 
                if(isset($_SESSION['err_email'])) //check session error_name
                { 
                    echo '<span class="error">'.$_SESSION['err_email'].'</span>';  //printing error name
                    unset($_SESSION['err_email']); //unset error variable
                }
            ?>
            Hasło: <input type="password" name="pass" id=""><br>
            <?php 
                if(isset($_SESSION['err_pass'])) //check session error_name
                { 
                    echo '<span class="error">'.$_SESSION['err_pass'].'</span>';  //printing error name
                    unset($_SESSION['err_pass']); //unset error variable
                }
            ?>
            Potwierdź hasło: <input type="password" name="repass" id=""><br>
            <?php 
                if(isset($_SESSION['err_repass'])) //check session error_name
                { 
                    echo '<span class="error">'.$_SESSION['err_repass'].'</span>';  //printing error name
                    unset($_SESSION['err_repass']); //unset error variable
                }
            ?>
            <?php
                if(isset($_SESSION['err_login'])) //check error password or login if exists
                {
                    echo '<span class="error">Login lub hasło są niepoprawne</span>'; //printing error password or login
                    unset($_SESSION['err_login']); //unset error variable
                }
            ?>
            <input type="submit" value="Zarejestruj się">
        </form>
    </div>
</body>
</html>