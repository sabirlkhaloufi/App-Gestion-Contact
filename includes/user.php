<?php
    session_start();
    class User extends DbConnection{
        public $UserName;
        public $Password;
        public $DateSign;
        // function __construct(){
        //     parent::__construct();
        // }
        function Login($UserName,$Password){
            $this->Username = $UserName;
            $this->Password = $Password;
            $requete = "SELECT * FROM users WHERE username = '$this->Username' and password = '$this->Password'";
            $statment = $this->connection -> prepare($requete);
            $statment -> execute();
            $result = $statment -> fetch();
            if($result['Username'] === $this->Username && $result['Password'] === $this->Password){
                $_SESSION['username'] = $result['Username'];
                $_SESSION['password'] = $result['Password'];
                $_SESSION['IdUser'] = $result['IdUser'];
                $_SESSION['SignDate'] = $result['SignDate'];
                date_default_timezone_set('africa/casablanca');
                $_SESSION['date'] = date('Y/m/d H:i:s');
                if(isset($_POST['check'])){
                    setcookie('username',$_SESSION['username'],time() + 3600);
                    setcookie('password',$_SESSION['password'],time() + 3600);
                }
                if($result['Role'] === "Admin"){
                    header("location:../Dashboard/Dashboard.php");
                }
                else{
                    header("location:../profil.php");
                }
            }
            else
            {
                header("location:../login.php?error=email or password not found");
            }
        }
        function Register($UserName,$Password,$DateSign){
            $this->Username = $UserName;
            $this->Password = $Password;
            $this->DateSign = $DateSign;
            date_default_timezone_set('africa/casablanca');
                $_SESSION['date'] = date('Y/m/d H:i:s');
            $requete = "SELECT * FROM users WHERE username = '$this->Username' and password = '$this->Password'";
            $statment = $this->connection -> prepare($requete);
            $statment -> execute();
            $result = $statment -> fetch();
            var_dump($result);
            if($result === false){
                $requete =$this->connection->prepare("INSERT INTO users(username,Password,SignDate)
                VALUES('$this->Username','$this->Password','$this->DateSign')");
                $requete->execute();
                $requete = "SELECT * FROM users WHERE username = '$this->Username' and password = '$this->Password'";
                $statment = $this->connection -> prepare($requete);
                $statment -> execute();
                $result = $statment -> fetch();
                $_SESSION['IdUser'] = $result['IdUser'];
                header('location:../profil.php');
            }
            else{
                header('location:../sign-up.php?error=this compte');   
            } 
        }
        
    }    
?>