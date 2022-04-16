<?php
    include_once('./db.php');
    class Contact extends DbConnection{
        public $Name;
        public $Phone;
        public $Email;
        public $Adresse;
        function __construct(){
            parent::__construct();
        }
        function Create($Name,$Phone,$Email,$Adresse){

        }
        function Delete(){

        }
        function Update($Name,$Phone,$Email,$Adresse){

        }
    }
?>