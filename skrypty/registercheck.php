<?php
session_start();
    class check
    {
        private $name;
        private $surname;
        private $email;
        private $pass;

        public function __construct($name, $surname, $email, $pass, $repass)
        {
            trim(htmlspecialchars($name)); //convert hmtl char
            trim(htmlspecialchars($surname)); //convert hmtl char
            trim(htmlspecialchars($email)); //convert hmtl char
            htmlspecialchars($pass); //convert hmtl char
            htmlspecialchars($repass); //convert hmtl char

            $err = true; //create flag

            if(!ctype_alnum($name) || strlen($name)<=3 || strlen($name)>=15) //check name
            {
                $_SESSION['err_name'] = 'Powinno mieć od 3 do 15 znaków alfanumerycznych'; //set error session
                $err=false; //turn flag
            }
            if(!ctype_alnum($surname) || strlen($surname)<=3 || strlen($surname)>=24) //check surname
            {
                $_SESSION['err_surname'] = 'Powinno mieć od 3 do 24 znaków alfanumerycznych'; //set error session
                $err=false; //turn flag
            }
            if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) //check email
            { 
                $_SESSION['err_email'] = 'E-mail jest nie poprawny'; //set error session
                $err=false; //turn flag
            }
            if(empty($pass) || strlen($pass)<=8 || strlen($pass)>=21 || !preg_match("/^[a-zA-Z' -]/",$pass)) //check password
            {
                $_SESSION['err_pass'] = 'Hasło jest nie prawidłowe'; //set error session
                $err=false; //turn flag
            }
            if($pass!=$repass)//check re-password
            {
                $_SESSION['err_repass'] = 'Hasła nie są identyczne'; //set error session
                $err=false; //turn flag
            }

            if($err==false) header("Location: ../podstrony/konto/register.php"); //check flag
            else
            {
                //send variable
                $this->name = $name; 
                $this->surname = $surname;
                $this->email = $email;
                $this->pass = password_hash($pass,PASSWORD_DEFAULT); //hash password
                self::ins(); //call ins() function
            }
        }
        public function ins()
        {
            try
            {
                include 'connect.php'; //include connect mysql
                $new = new conn\connect; //create new object
                $prepare = $new->prepare("INSERT INTO `users`(`id`, `name`, `surname`, `pass`, `email`) VALUES (NULL,:name,:surname,:pass,:email)"); //Insert values on database
                //bind param to insert
                $prepare->bindParam(':name', $this->name); 
                $prepare->bindParam(':surname', $this->surname);
                $prepare->bindParam(':pass', $this->pass);
                $prepare->bindParam(':email', $this->email);
                $prepare->execute();
                header("Location: ../podstrony/konto/login.php"); //redirect to login page
                $new = null; //close connect
            }catch(PDOException $e)
            {
                echo $e->getMessage();//print error
            }
        }
    }

    $new = new check($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['pass'], $_POST['repass']); //call check class
?>