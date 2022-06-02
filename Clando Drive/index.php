
<?php
include "db.php";

if (isset($_POST ["commander"])){
    if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['num'])&& isset($_POST['place'])&& isset($_POST['position'])&& isset($_POST['destination'])){
   
        function validate($data){
           $data = trim($data);
            $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
       }
       
        $nom= validate($_POST['nom']);
        $mail=validate($_POST['email']);
        $num=validate($_POST['num']);
        $place=validate($_POST['place']);
        $position=validate($_POST['position']);
        $destination=validate($_POST['destination']);
    
        $insert= $conn->prepare( "INSERT INTO reservation (nom, email, numero,passager,position,destination) VALUES(?,?,?,?,?,?)");
        $insert->execute(array($nom, $mail,$num, $place,$position,$destination));
        header ("Location:index.php");
        
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>                              

<body class="container-fluid">
    <header class="bg-black d-flex justify-content-between align-items-center">

        <img src="./img/clandologo.jpg" alt="" width="8%">

        <ul class="nav justify-content-end">

            <li class="nav-item">
                <a class="nav-link" href="#home">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#reservation">Reservation </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">A Propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#contacts">Contacts</a>
            </li>
        </ul>

    </header>

   <div class="row">
   <div class="col-12 col-sm-12 mt-3 mb-3">
	   <img src="img/img1.jpg" alt="" width="100%" height="100%">
	   </div>

        <div id="arriere">
            <p class="cdf">CLANDO DRIVE SERVICE</p>
            <p class="commander">COMMANDEZ TARDIVEMENT EN TOUTE SECURITE</p>
        </div>
   </div>

    <section id="reservation" class="">
        <h1 class="text-center">RESERVATION</h1>

        <div class=" d-flex justify-content-center ">
            <form method="POST" action="" class="row formulaire">
                <div class="m-2 ">
                    <label for="exampleFormControlInput1" class="form-label ">Nom complet</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1"
                        placeholder="Entrer votre Nom et Prénoms" name="nom">
                </div>
                <div class="m-2">
                    <label for="exampleFormControlInput1" class="form-label ">Email address</label>
                    <input type="email" class="form-control " id="exampleFormControlInput1"
                        placeholder="name@example.com" name="email">
                </div>
                <div class="m-2">
                    <label for="exampleFormControlInput1" class="form-label">Numéro de téléphone</label>
                    <input type="tel" class="form-control" id="exampleFormControlInput1"
                        placeholder="00225 xxxxxxxxxx" name="num">
                </div>
                <div class="m-2">
                    <label for="exampleFormControlInput1" class="form-label">Nombre de passagers</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="4 au maximum" name="place">
                </div>
                <div class="m-2">
                    <label for="position" class="form-label">Position initiale </label>
                    <input type="text" class="form-control" id="position"
                        placeholder="Veuillez entrez votre position " name="position">
                </div>
                <div class="m-2">
                    <label for="desti" class="form-label">Destination </label>
                    <input type="text" class="form-control" id="desti"
                        placeholder="Veuillez entrez votre destination " name="destination" >
                </div>
                
                <input type="submit" class="btn mb-2 btn-dark" name="commander" value="Commander">
            </form>
        </div>
    </section>

    <section >
		<div class="row">
			<h1  id="about" class="text-center text-white">A PROPOS</h1>
            <p class="col-md-6 mt-3 p-3 text-dark">
                Professionnel ou particulier, réservez nos services pour vous conduire à des heures tardives
                partout
                où vous voulez en toute sérénité.
                Laissez-vous conduire, CLANDO DRIVE vous escorte. Nos chauffeurs ponctuels, courtois et
                discrets viennent vous chercher sur le lieu de rendez-vous
                de votre choix et vous accompagnent jusqu’à destination.
                Libérez-vous du stress d’une voiture de location , d’un transport en commun qui a
                du retard ou qui est bondé. CLANDO DRIVE facilite votre transfert. Une fois votre réservation
                confirmée, votre chauffeur vous attend et vous conduit dans une voiture tout confort et bien
                entretenue
                jusqu’à votre destination.
                Un voyage agréable pour vous permettre d’arriver à l’heure sans aucune contrainte.

            </p>
            <div class="col-md-6">
                <img src="img/v1.jpg" alt="" width="100%" heigth="00%">
            </div>
        </div>
        </div>
    </section>


</body>
<footer class="container-fluid mt-3 bg-secondary  ">
<h1 id="contacts" class="text-center text-dark">CONTACTS</h1>

<div class="row">
	<div class="col-md-4">
	<img src="img/clandologo.jpg" width="300px" alt="">
	</div>
	<div class="col-md-4 d-flex flex-column">
		<h3>Téléphones</h3>
		<a href="tel:0102194762 link" class="text-white ">0102194762</a>
		<a href="tel:0777429530" class="text-white">0777429530</a>
		<h3>Email</h3>
		<a href="mailto:clandodrive@gmail.com" class="text-white">clandodrive@gmail.com</a>
		<h3>Nous suivre</h3>
		<div>
		<a class="m-2" href="https://instagram.com/clandodrive?utm_medium=copy_link"><i class="bi bi-instagram  text-white"></i></a>
		<a class="m-2" href="#"><i class="bi bi-facebook text-white"></i></a>
		<a class="m-2" href="#"><i class="bi bi-twitter  text-white"></i></a>
		</div>
	</div>
	<div class="col-md-4">	
	<img src="img/carte.png" width="100%" height="80%" class="" alt="">
	</div>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</html>