<?php
$newuser = new utilisateurController();
if(!isset($_SESSION['nom'])){
  header("location: login");
 }
 $newuser = new adminController();
$userCount = $newuser->getCountUser();
$res = new reservationController();
$reserveCount = $res->getCountReserve();
 $data = new EtudiantController();
 $etudiant = $data->getAlletudiant();
 $etudiantCount = $data->getCountEtudiant();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="views/css/dashboard.css" />
    <title>Dashboard</title>
</head>

<body>
    <main>
        <div class="d-flex" id="dashboard">
            <div class="bg  " id="sidebar-dashboard">
                <a href="index.html" class="logo my-3   d-flex align-items-center">
                    <img src="views/img/logo.png" alt="">
                    <span>
                        <spam style="color: #e44aec;">Mon</spam>Parcour
                    </span>
                </a>
                <hr class="mb-3 ">
                <div class="list-group  d-flex ">

                    <a href="dashboard" class="list-group-item mx-2 p-2 border-0 my-2  rounded-3  fw-bold  fs-6  "
                        style="background:#DD10C9 ;">
                        <img src="views/img/home.png"> Accueil</a>
                    <a href="testOr" class="list-group-item mx-2 fw-bold border-0 bg-transparent p-2">
                        <img src="views/img/test.png">Test </a>
                    <a href="etudiant"
                        class="list-group-item mx-2 p-2 fw-bold  fs-6  border-0 bg-transparent my-2   ">
                        <img src="views/img/graduate-cap.png">Etudiants</a>
                    <a href="chargeOrientation" class="list-group-item mx-2 border-0 fw-bold  fs-6  bg-transparent my-2 p-2 ">
                        <img src="views/img/user.png">Charges d'orientation </a>
                    <a href="reservation" class="list-group-item mx-2 fw-bold  fs-6   border-0 my-2  rounded-3 p-2 ">
                        <img src="views/img/booking.png">Réservation</a>
                    <a href="contact" class="list-group-item mx-2 fw-bold  fs-6  border-0 my-2  rounded-3 p-2  ">
                        <img src="views/img/message.png"> Messages</a>
                    <a href="admin" class="list-group-item mx-2 border-0 fw-bold  fs-6   bg-transparent my-2 p-2 ">
                        <img src="views/img/user.png">Utilisateurs </a>
                    <a href="#" class="list-group-item mx-2 border-0 fw-bold  fs-6   bg-transparent my-2 p-2 ">
                        <img src="views/img/settings (1).png"> Settings</a>
                    <a href="logout"
                        class="list-group-item mx-2 border-0 fw-bold  fs-6  bg-transparent  mt-5 mb-2 ">
                        Se déconnecter <i class="fas fa-sign-out-alt"></i> </a>

                    </ul>
                </div>
            </div>
            <div id="page-content-dashboard" class="bt">
                <nav class="navbar navbar-expand-lg   py-1 px-4 cont ">
                    <div class="d-flex align-items-center">

                        <i class="fa fa-bars me-3 " id="menu-toggle"></i>
                        <h5>Accueil</h5>
                    </div>


                    <div class="navbar-nav ms-auto">
                        <div class="nav-item ">
                            <form class="d-flex  justify-content-end mt-3 ">
                                <div class="fw-bold fs-4 m-3 ">
                                    <h5>Bonjour : <span><?php  echo $_SESSION['nom'];  ?> </span></h5>
                                </div>
                                    
                                
                            </form>
                        </div>
                    </div>

                </nav>
                <div class="container-fluid px-4">
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-lg-3 col-md-5 mb-4 ">
                            <div class="p-3 d-flex justify-content-around align-items-center card_student ">
                                <div>
                                    <i class="fas fa-graduation-cap fs-5  p-1"></i>

                                    <p class="fs-5 mb-5 Secondary-text">étudiants</p>
                                </div>
                                <h1 class="fs-5 mt-5"><?php  echo $etudiantCount['etu'];  ?></h1>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-5  mb-4 ">
                            <div class="p-3  d-flex justify-content-around align-items-center card_cours ">
                                <div>
                                    <img src="views/img/approval.png">
                                    <p class="fs-5 mb-5 Secondary-text">Test</p>
                                </div>
                                <h1 class="fs-5 mt-5 text-white">13</h1>
                            </div>
                        </div>
                        <div class=" col-lg-3  col-md-5  mb-4">
                            <div class="p-3   d-flex justify-content-around align-items-center card_payment ">
                                <div>
                                    <img src="views/img/bookingCart.png">

                                    <p class="fs-5 mb-5 Secondary-text">Réservation</p>
                                </div>
                                <h1 class="fs-5 mt-5"><?php  echo $reserveCount['rese'];  ?></h1>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5  mb-4">
                            <div class="p-3   d-flex justify-content-around align-items-center card_user ">
                                <div>
                                    <i class="far fa-user fs-5  p-1"></i>

                                    <p class="fs-5 mb-5 text-white">Utilisateurs</p>
                                </div>
                                <h1 class="fs-5 mt-5 text-white"><?php  echo $userCount['user'];  ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid px-4">
                        <div class="row ">
                            <div class=" d-flex justify-content-between my-3">
                                <h1 class="fs-4 ">Liste des étudiant</h1>

                            </div>
                            <div class=" table-responsive-sm table-responsive-md">
                                <table
                                    class="table bg-white rounded shadow-sm align-middle overflow-scroll  table-hover">
                                  
                                    <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Nom</th>
                                        <th>email</th>
                                        <th>Adresse</th>
                                        <th>Téle</th>
                                        <th>email</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($etudiant as $etudiant): ?>
                                    <tr>   
                                        <td>
                                        <td><?php echo $etudiant['nom'] ?></td>
                                        <td><?php echo $etudiant['email'] ?></td>
                                        <td><?php echo $etudiant['adresse'] ?></td>
                                        <td><?php echo $etudiant['tele'] ?></td>
                                        <td> <i class="fas fa-pen mx-4 "></i></td>
                                        <td> <i class="fas fa-trash  "></i></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("dashboard");
                var toggleButton = document.getElementById("menu-toggle");
                toggleButton.onclick = function () {
                    el.classList.toggle("toggled");
                };
            </script>
    </main>

</body>

</html>