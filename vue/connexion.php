<?php
session_start();
require_once("../controleur/leControleur.php");
$unControleur = new leControleur("localhost","ppe","root","");
if(isset($_POST["Seconnecter"]))
{
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];  
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $resultat = $unControleur->verifCon($email, $mdp);
        if (isset($resultat['nom'])) {
            $_SESSION['id_personne'] = $resultat['id_personne'];
            $_SESSION['mdp'] = $resultat['mdp'];
            $_SESSION['email'] = $resultat['email'];
            $_SESSION['nom'] = $resultat['nom'];
            $_SESSION['prenom'] = $resultat['prenom'];
            header('location: ../index.php');
        } else {
            echo" Connexion impossible ! Veuillez vérifier vos identifiants !";
        }
    } else {
        $accronyme = $email;
        $resultat = $unControleur->verifConPart($accronyme, $mdp);
        //var_dump($resultat);
        if (isset($resultat['nom_marque'])) {
            $_SESSION['id_partenaire'] = $resultat['id_partenaire'];
            $_SESSION['accronyme'] = $resultat['accronyme'];
            $_SESSION['mdp'] = $resultat['mdp'];
            $_SESSION['nom_marque'] = $resultat['nom_marque'];
            $_SESSION['adresse'] = $resultat['adresse'];
            header('location: ../index.php');
        } else {
            echo" Connexion impossible ! Veuillez vérifier vos identifiants !";
        }
    }
  }             
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Orange Event</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/venobox/venobox.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#intro" class="scrollto"><img src="../img/logo.png" alt="" title=""></a>
      </div>
    <?php
    require_once("NavBar.php");
    ?>
    </div>
  </header>
<div class="nav_bar">
</div>
<div>
  <?php 
      require_once("formulaire/formConnexion.php");
  ?>
</div>
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="TheEvenet">
            <p>Notre Groupe est l’héritier d’une histoire plurielle, riche de défis relevés, d'innovations audacieuses et d'une solidarité forte entre les femmes et les hommes qui ont partagé cette dynamique. Orange, héritier de France Télécom, porte les valeurs d’un groupe mondial d’origine française, fier de ses racines, mais aussi fier de ses conquêtes à l’échelle du monde. Une épopée à découvrir à travers 30 moments forts et 130 dates clés qui constituent la mémoire de notre entreprise, d’hier à aujourd’hui.</p>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
          <h4>Liens utiles</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Accueil</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">A propos</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
            <li><i class="fa fa-angle-right"></i> <a href="#">Accueil</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">A propos</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactez nous</h4>
            <p>
              6 Place d'Alleray <br>
              Paris, P 75015<br>
              FRANCE <br>
              <strong>Téléphone:</strong>06.47.38.99.23<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
            <div class="social-links">
              <a href="https://twitter.com/orange?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/Orange.France/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/orange/" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Orange</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.cfa-insta.fr">Cfa insta</a>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/main.js"></script>
</body>
</html>