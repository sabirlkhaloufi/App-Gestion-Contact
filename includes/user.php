<?php
    include_once('./db.php');
    session_start();
    class User extends DbConnection{
        public $UserName;
        public $Password;

        function __construct(){
            parent::__construct();
        }
        function Login($UserName,$Password){
            $this->Username = $UserName;
            $this->Password = $Password;
            $requete = "SELECT * FROM users WHERE username = '$this->Username' and password = '$this->Password'";
            $statment = $this->connection -> prepare($requete);
            $statment -> execute();
            var_dump($statment);
            $result = $statment -> fetch();
            var_dump($result);
            if($result['Username'] === $this->Username && $result['Password'] === $this->Password){
                $_SESSION['username'] = $result['Username'];
                $_SESSION['password'] = $result['Password'];
                $_SESSION['Id'] = $result['Id'];
                date_default_timezone_set('MA');
                $_SESSION['date'] = date('Y/m/d H:i:s');
                if(isset($_POST['check'])){
                    setcookie('email',$_SESSION['email'],time() + 3600);
                    setcookie('password',$_SESSION['password'],time() + 3600);
                }

                header("location:../profil.php");
                }
                else
                {
                    header("location:../login.php?error=email or password not found");
                }
        }
        function Register($UserName,$Password){
            $this->Username = $UserName;
            $this->Password = $Password;
            $requete = "SELECT * FROM users WHERE username = '$this->Username' and password = '$this->Password'";
            $statment = $this->connection -> prepare($requete);
            $statment -> execute();
            $result = $statment -> fetch();
            var_dump($result);
            if($result === false){
                date_default_timezone_set('morocco/casablanca');
                $_SESSION['SignDate'] = date('Y/m/d H:i:s A');
                $requete =$this->connection->prepare("INSERT INTO users(username,Password)
                VALUES('$this->Username','$this->Password')");
                $requete->execute();

                $requete = "SELECT * FROM users WHERE username = '$this->Username' and password = '$this->Password'";
                $statment = $this->connection -> prepare($requete);
                $statment -> execute();
                $result = $statment -> fetch();
                $_SESSION['Id'] = $result['Id'];
                echo $_SESSION['Id'];
                header('location:../profil.php');
            }
            else{
                header('location:../sign-up.php?error=this compte');   
            } 
        }
        
    }    
?>