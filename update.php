<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact list</title>
    <link rel="icon" href="./Assets/img/contact-list.svg">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./Css/bootstrap.css">
</head>
<body>
<?php 
    session_start();
    $_SESSION['Id'] = $_GET['Id'];
    include_once('./includes/db.php');
    include_once('./includes/contact.php');
    $info = Contact::View($_SESSION['Id']);
?>
<header class="position-sticky top-0 container">
    <nav class="navbar navbar-expand-lg navbar-light nav-bg">
        <div class="container-fluid col">
          <div class="logo col-11">
            <a class="navbar-brand text-light" href="./index.php"><span><i class="fas fa-address-book text-light me-2"></i></span>Contacts</a>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-column flex-md-row gap-2">
              <li class="nav-item d-flex align-items-center">
                <img src="./Assets/img/avatar (1).svg" alt="" width="50">
                <span class="ms-2"><?php if(isset($_SESSION)){ echo $_SESSION['username']; }?></span>
              </li>
            </ul>
          </div>
        </div>
        <button class="navbar-toggler position-absolute" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
</header>
    <main class="d-flex flex-column">
        <!-- <div class="bar d-flex position- ms-3 gap-2 h-50 bg-primary rounded-3 p-2">
            <span>A</span> <span>B</span> <span>C</span> <span>D</span> <span>E</span> <span>F</span> <span>G</span> <span>H</span> <span>I</span> <span>J</span> <span>K</span> <span>L</span> <span>M</span> <span>N</span> <span>O</span> <span>P</span> <span>Q</span> <span>R</span> <span>S</span> <span>T</span> <span>U</span> <span>V</span> <span>W</span> <span>X</span> <span>Y</span> <span>Z</span> 
        </div> -->
        <div class=" shadow p-3 mb-5 bg-body rounded w-100 container mt-5">
            <div class="d-flex justify-content-between">
                <p class="font-weight-bold h5">update contact</p>
    
                <!-- Button trigger modal -->
                <div class="position-sticky top-0">  
                </div>
                
      
            </div>
            <div class="d-flex justify-content-center gap-5">
                
            <form class="p-3" id="formAdd" method="POST" action="./includes/main.php">
                              <p class="vide-msg alert-danger text-center "></p>
                                <div class="mb-3 d-flex gap-4">
                                  <div class="name">
                                    <label for="name" class="form-label">Name</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Name" type="text" class="form-control" id="name" aria-describedby="emailHelp" name="Name" value="<?php echo $info['Name']; ?>">
                                  </div>
                                  <div class="phone">
                                    <label for="phone" class="form-label">Phone</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Phone" type="text" class="form-control" id="phone" aria-describedby="emailHelp" name="Phone" value="<?php echo $info['Phone']; ?>">
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label for="email" class="form-label">Email</label> <span class="valid text-danger"></span>
                                  <input placeholder="Enter Email" type="text" class="form-control" id="email" name="Email" value="<?php echo $info['Email']; ?>">
                                </div>
                                <p class="valid text-danger"></p>
                                <div class="mb-3">
                                    <label for="adresse" class="form-label">Adresse</label> <span class="valid text-danger"></span>
                                    <textarea class="form-control" name="Adresse" id="adresse" cols="10" rows="3" placeholder="Enter Adresse" id="Adresse"><?php echo $info['Adresse']; ?></textarea>
                                  </div>
                                <div class="button">
                                    <a href="./listcontacts.php" class="btn btn-secondary">Cannel</a>
                                    <button type="submit" name="submitUpdate" class="btn btn-primary">Save</button>
                                </div>
                              </form>
                              <img class="d-none d-lg-block" src="./Assets/img/update.svg" alt="update" width="400">
                </div>
    </main>

    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./Js/contacts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>
</html>