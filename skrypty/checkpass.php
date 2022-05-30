<?php
    session_start(); //start session
    unset($_SESSION['err_login']); //unset session
?>
</script>
<?php
    class login 
    {
        public function __construct($login, $password)
        {
            try
            {
                include 'connect.php'; //include connect mysql
                $conn = new conn\connect; //create new object
                $login = htmlspecialchars($login); //convert hmtl char
                $password = htmlspecialchars($password); //convert hmtl chars
                $results = $conn->prepare("SELECT email, pass FROM users"); //prepare new query get email and password from database
                $results->execute();
                while($answer = $results->fetch(PDO::FETCH_ASSOC)) //loop with associative params
                {
                    if($answer['email']==trim($login) && password_verify(trim($password), $answer['pass'])) //check if login and password are correct
                    {
                        $_SESSION['login']=true; //trun flag if both correct
                        header("Location: ../index.php"); //redirection to home page
                    }else{
                        $_SESSION['err_login'] = true; //trun flag if login or password is not correct
                        header("Location: ../podstrony/konto/login.php");//redirection to login page
                    }
                }
                $conn = null; //close connect
            }catch(PDOException $e)
            {
                echo $e->getMessage();//print error
            }
        }
    }

    $class = new login($_POST['login'], $_POST['password']); //call class login


?>