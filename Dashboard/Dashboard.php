<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../Css/bootstrap.css">
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
<header class="position-sticky top-0 container">
<nav class="navbar navbar-expand-lg navbar-light nav-bg">
    <div class="container-fluid col">
      <div class="logo col-11">
        <a class="navbar-brand text-light" href="../index.php"><span><i class="fas fa-address-book text-light me-2"></i></span>Contacts</a>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class=" navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-column flex-md-row gap-2">
          <li class="nav-item d-flex align-items-center">
            <img src="./Assets/img/avatar (1).svg" alt="" width="50">
            <span class="ms-2"><?php if(isset($_SESSION['username'])){ echo $_SESSION['username']; }
            ?></span>
            <a class="btn btn-primary" href="../login.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <button class="navbar-toggler position-absolute" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</header>
    <main class="d-flex flex-column justify-content-center align-items-center">
        <div class="title">
            <a class="navbar-brand text-primary" href="./Dashboard.php"><span><i class="fas fa-address-book text-primary me-2"></i></span>Dashboard Admin</a>
        </div>
        <div class="link mt-5">
            <ul class="d-flex gap-4 list-unstyled">
                <li><button class="btn btn-primary btn-nav" >Statistics</button></li>
                <li><button class="btn btn-primary btn-nav" >Users</button></li>
                <li><button class="btn btn-primary btn-nav" >Contacts</button></li>
            </ul>
</div>
        <?php
            include_once("../includes/db.php");
			$con = new DbConnection();
			$result =$con->connection->prepare("SELECT * FROM Contacts");
			$result->execute();
            $contacts = $result->fetchAll();

			$result =$con->connection->prepare("SELECT * FROM Users");
			$result->execute();
            $users = $result->fetchAll();
        ?>
                <div class="container mt-5 statistic">
                    <div class="row justify-content-center">
                        <div class="col-md-4 ">
                            <div class="stat-card bg-white">
                                <div class="stat-card__content">
                                    <h4 class="text-uppercase mb-1">Contacts</h4>
                                    <h2><i class="fa fa-dollar"></i><?php echo count($contacts); ?></h2>
                                    <div>
                                        <span class="text-success font-weight-bold mr-1"><i class="fa fa-arrow-up"></i> +5%</span> 
                                        <span class="text-muted">last 28 days</span>
                                    </div>
                                </div>
                                <div class="stat-card__icon stat-card__icon--success">
                                    <div class="stat-card__icon-circle">
                                        <i class="fas fa-address-book"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card bg-white">
                                <div class="stat-card__content">
                                    <h4 class="text-uppercase mb-1">Users</h4>
                                    <h2><?php echo count($users); ?></h2>
                                    <div>
                                        <span class="text-danger font-weight-bold mr-1"><i class="fa fa-arrow-down"></i> -5%</span> 
                                        <span class="text-muted">last 28 days</span>
                                    </div>
                                </div>
                                <div class="stat-card__icon stat-card__icon--primary">
                                    <div class="stat-card__icon-circle">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container table-responsive contacts list-users d-none">
			<table class="table">
				<thead>
					<tr>
						<th>Username</th>
						<th>Date Sign-up</th>
						<th>Contacts</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php  foreach($users as $user): ?>
                    <tr>
						<td>
							<div class="user-info d-flex align-items-center">
								<div class="user-info__img">
									<img class="me-3" src="../Assets/img/avatar (1).svg" alt="User Img" width="55">
								</div>
								<div class="user-info__basic">
									<h5 class="mb-0"><?php echo $user['Username'];?></h5>
								</div>
							</div>
						</td>
						<td><?php echo $user['SignDate'];?></td>
						<td><span class="ms-3 btn bg-primary text-white">122</span></td>
						<td>
							<button class="btn btn-danger btn-sm">Delete</button>
						</td>
					</tr> 
					<?php endforeach; ?>     
				</tbody>
			</table>
		</div>
        <div class="container table-responsive contacts list-contacts d-none">
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Phone</th>
						<th>Adresse</th>
						<th>User</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php  foreach($contacts as $contact): ?>
					<tr>
						<td>
							<div class="user-info d-flex align-items-center">
								<div class="user-info__img">
									<img class="me-3" src="../Assets/img/contacts.svg" alt="User Img" width="55">
								</div>
								<div class="user-info__basic">
									<h5 class="mb-0"><?php echo $contact["Name"] ?></h5>
									<p class="text-muted mb-0"><?php echo $contact["Email"] ?></p>
								</div>
							</div>
						</td>
						<td><?php echo $contact["Phone"] ?></td>
						<td><?php echo $contact["Adresse"] ?></td>
						<td><span class=" btn bg-light text-dark">sabir</span></td>
						<td>
							<button class="btn btn-danger btn-sm">Delete</button>
						</td>
					</tr>

					<?php endforeach;  ?>
				</tbody>
			</table>
		</div>
    </main>
    <script src="./main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>