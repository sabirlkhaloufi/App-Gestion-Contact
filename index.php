<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="icon" href="./Assets/img/icon-contact.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./Css/bootstrap.css">
</head>
<body>
  <?php include_once"./includes/header.php"; ?>
    <main class="d-flex align-items-center justify-content-center">
      <div class="acceuil d-flex flex-column flex-md-row align-items-center justify-content-between  container mt-5">
        <div class="bienvenu d-flex flex-column justify-content-center gap-4">
          <h2 class="mt-6">Welcome In Apps Liste Contact</h2>
          <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Illum veritatis facere optio quia dolor quas consectetur sequi <br> impedit labore maiores laudantium</p>
          <div class="buttons d-flex gap-2">
            <a class="btn btn-primary text-light" href="./sign-up.php">Get Started</a>
          </div>
          <div class="social-media d-flex gap-4">
            <a href="https://www.linkedin.com/in/sabir-lkhaloufi-9aaab2209/" target="_blank"><i class="fab fa-linkedin-in f h5"></i></a>
            <a href="https://github.com/sabirlkhaloufi" target="_blank"><i class="fab fa-github h5"></i></a>
            <a href="https://web.facebook.com/" target="_blank"><i class="fab fa-facebook-f h5"></i></a>
            <a href="https://twitter.com/LkhaloufiSabir" target="_blank"><i class="fab fa-twitter h5"></i></a>
            <a href="https://www.youtube.com/channel/UC6GNAIbkg1NV0LmhopxOxiA" target="_blank"><i class="fab fa-youtube h5"></i></a>
          </div>
        </div>
        <img src="./Assets/img/undraw_personal_email_re_4lx7.svg" alt="calling" height="350" width="350">
      </div>
    </main>
    <footer>
      <p class="h5 position-absolute copyright container">Created By Sabir Lkhaloufi</p>
    </footer>
    <script src="./Js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>