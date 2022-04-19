<?php
    class Contact extends DbConnection{
        public $Name;
        public $Phone;
        public $Email;
        public $Adresse;
        // function __construct(){
        //     parent::__construct();
        // }
        function Create($Name,$Phone,$Email,$Adresse){
            $this->Name = $Name;
            $this->Phone = $Phone;
            $this->Email = $Email;
            $this->Adresse = $Adresse;
            $IdUser = $_SESSION['IdUser'];
            $requete =$this->connection->prepare("INSERT INTO Contacts(Name,Phone,Email,Adresse,FkUser)
            VALUES('$this->Name','$this->Phone','$this->Email','$this->Adresse','$IdUser')");
            $requete->execute();
            header("location:../listcontacts.php"); 
        }
        function Delete($id){
            $con = $this->connection;
            $stmt = $con ->prepare("DELETE FROM Contacts WHERE IdContact=$id");
            $stmt -> execute();
            header("location:../listcontacts.php");  
        }
        function Update($Name,$Phone,$Email,$Adresse,$id){
            $requete = $this->connection-> prepare("UPDATE Contacts 
            SET 
            Name = '$Name',
            Phone = '$Email',
            Email = '$Phone',
            Adresse = '$Adresse'
            WHERE IdContact = $id");
            $res = $requete -> execute();
            header("location:../listcontacts.php");
        }
        static function View($id){
            $con = new DbConnection();
            if($id === 0){
                $IdUser = $_SESSION['IdUser'];
                $result =$con->connection->query("SELECT * FROM Contacts WHERE FkUser = $IdUser");
                $info = $result->fetchAll();
            }
            else{
                $IdUser = $_SESSION['IdUser'];
                $result =$con->connection->query("SELECT * FROM Contacts WHERE IdContact = $id");
                $info = $result->fetch();   
            }
            return $info;
        }
    }
?>