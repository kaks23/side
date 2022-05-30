<?php
    session_start(); //stran session
    if(isset($_SESSION['login'])) //check session login
    {
        header("Location: ../../index.php"); //redirection to home page
    }
?>
<!DOCTYPE html>
<html lang="pl"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="ⓒ Księganet" >
    <link rel='icon' href='../grafika/favicon.png'  sizes='200x200'>
    <title>Księganet</title>
    <link rel="stylesheet" href="../../css/login.css">
</head>
<body>
    <div id="logboard">
        <form action="../../skrypty/checkpass.php" method="post">
            Login: <input type="text" name="login" id=""><br>
            Hasło: <input type="password" name="password" id=""><br>
            <?php
                //error valid password or login
                if(isset($_SESSION['err_login'])) //check session error_login
                {
                    echo '<span class="error">Login lub hasło są niepoprawne</span>'; //printing error for user
                    unset($_SESSION['err_login']); //unset error login
                }
            ?>
            <input type="submit" value="Zaloguj">
        </form>
        <a href="register.php">Zarejestruje się</a>
    </div>
</body>
</html>