<?php
    // require_once('vendor/autoload.php');
    $google = new Google_Client();

    $google->setClientId('188114819568-cb8lpeedf11s4cn69fdvp8fp3e5giv4e.apps.googleusercontent.com');

    $google->setClientSecret('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');

    $google->setRedirectUri('http://localhost/App-Gestion-Contact/profil.php');

    $google->addScope('profile');

    $google->addScope('email');

   

    session_start();
?>