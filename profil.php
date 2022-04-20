<!DOCTYPE html>
<?php 
    // error_reporting(0);
    // require_once('./setup.php');
    // if(isset($_GET['code'])){
    //   $token = $google->fetchAccessTokenWithAuthCode($_GET['code']);
    //   $google->setAccessToken($token);
    //   $service = new Google_Service_Oauth2($google);
    //   $data = $service->userInfo->get();
    //   print_r($data);
    //   $email = $data->email;
    //   $name = $data->name;
    //   echo $email;
    // }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="icon" href="./Assets/img/profile.svg">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./Css/bootstrap.css">
</head>
<body>
<?php session_start();?>
<header class="position-sticky top-0 container">
    <nav class="navbar navbar-expand-lg navbar-light nav-bg">
        <div class="container-fluid col">
          <div class="logo col-11">
            <a class="navbar-brand text-light" href="./index.php"><span><i class="fas fa-address-book text-light me-2"></i></span>Contacts</a>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" navbar-nav">
              <li class="nav-item d-flex align-items-center">
              <span class="pe-2"><?php if(isset($_SESSION['username'])){ echo $_SESSION['username']; }
                ?></span>
                <img src="./Assets/img/avatar (1).svg" alt="" width="50" class="pe-2">
                <a class="btn btn-primary pe-2" href="./includes/main.php?Logout=true">Logout</a>
              </li>
            </ul>
          </div>
        </div>
        <button class="navbar-toggler position-absolute" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
</header>

    
    <div class="d-flex justify-content-center align-items-center mt-5">
    
        <div class=" shadow p-3 mb-5 bg-body rounded w-75 h-75">
            <div class="d-flex flex-column justify-content-around align-items-center gap-5 flex-md-row py-4">
            <div class="img-bg d-flex flex-column justify-content-around align-items-center">
                <p class="h3 mb-5"><?php if(isset($_SESSION)){ echo "Welcome"." ".$_SESSION['username'] ." "."!"; }?></p>
                <img class="" src="./Assets/img/avatar (1).svg" alt="avatar" class="rounded-circle" width="200">
            </div class="">
            <div class="info d-flex flex-column gap-5 w-50 contacts">
              <h4 class="text-center">Your profil</h4>
              <table class="table table-hover w-100">
                <tbody>
                  <tr>
                    <th>Username</th>
                    <td> <?php if(isset($_SESSION)){ echo $_SESSION['username']; }?> </td>
                  </tr>
                  <tr>
                    <th>SignDate</th>
                    <td> <?php if(isset($_SESSION)){ echo $_SESSION['SignDate']; } ?></td>
                  </tr>
                  <tr>
                    <th>LastLogin</th>
                    <td><?php if(isset($_SESSION)){ echo $_SESSION['date'];} ?></td>
                  </tr>
                </tbody>
              </table>
              <div class="d-flex gap-1">
              <a class="btn btn-primary" href="./listcontacts.php">contact</a>
              <a class="btn btn-primary" href="./includes/main.php?Logout=true">Logout</a>
              <a class="btn btn-danger" href="./includes/main.php?IdUser=<?php echo $_SESSION['IdUser'];?>">Delete</a>
              </div>
            </div>
          </div>
            
        </div>
        <!-- <script src="./Js/main.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </div>
</body>
</html>