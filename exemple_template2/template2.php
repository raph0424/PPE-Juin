<!DOCTYPE html>
<html>
<head>
  <title>Template 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script> 
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>
</head>

<body>
    <?php
                        foreach ($result as $unResultat) {
                            if($unResultat['id_event'] == $_GET['id']){ ?>
<!-- :::::::::::::::::::::::::::::::::::: AFFICHE :::::::::::::::::::::::::::::::::-->
    <div class="row">
      <div class="col-sm-12">
        <center>
          <img class="img-responsive" src="../img/event/<?php echo $unResultat['designation']; ?>1.jpg" alt="VotreImage" width="900" height="300">
        </center>
      </div>
    </div>
<!-- :::::::::::::::::::::::::::::::::::: GRILLE :::::::::::::::::::::::::::::::::-->
    <div class="row" >
<!-- :::::::::::::::::::::::::::::::::::: TITRE :::::::::::::::::::::::::::::::::-->
      <div class="col-sm-12" >
        <center>
          <br/><br/><br/>
            <h1 class="font-weight-light"><?php echo $unResultat['designation']?></h1>
            <?php if (isset ($_SESSION['nom_marque'])) { 
                $orga = $_SESSION['nom_marque'];
            echo '<p class="font-italic "><small>Organisateur : '.$orga.'</small></p>';
             } ?>
<!-- ::::::::::::::::::::::::::::::::::: DATE  ::::::::::::::::::::::::::::::: -->
            <p  class="font-weight-light">              
              <a href="https://www.google.com/calendar/render?action=TEMPLATE&text=evenement&dates=20190612T180000Z/20190612T210000Z&ctz=Europe/Paris&details=reserve%20ta%20soiree%20pour%20assister%20a%20cet%20evenement&location=paris,%20france" class="date_img">
                 <img class="img-responsive" src="../exemple_template2/date.png">
              </a>
              <br/>
              <small>click here ↑</small><br/><br/><br/>
            </p>
          </center>
      </div>
     </div>
<!-- :::::::::::::::::::::::::: SHARE WITH FRIENDS:::::::::::::::::::::::::::::::::-->
      <div class="col-sm-12">
<!--::::::::::::::::::::::::::::::: LIGNE  :::::::::::::::::::::::::::::::::::: -->
        <hr>
        <center>
          <p class="font-italic">Partagez Avec Vos Amis<br/>
            <a href="#">
              <span class="fa fa-facebook" data-toggle="tooltip" data-placement="top" title="Facebook"></span>
            </a>
            <a href="#" class="icoTwitter">
              <span class="fa fa-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"></span>
            </a>
            <a href="#" class="icoInstagram">
              <span class="fa fa-instagram" data-toggle="tooltip" data-placement="top" title="Instagram"></span>
            </a>
            <a href="#" class="icoSnapchat">
              <span class="fa fa-snapchat" data-toggle="tooltip" data-placement="top" title="Snapchat"></span>
            </a>
          </p> 
        </center>
<!--::::::::::::::::::::::::::::::: LIGNE  :::::::::::::::::::::::::::::::::::: -->
        <hr>
    </div>
<!-- ::::::::::::::::::::::::::::::::::: SECTION 2 ::::::::::::::::::::::::::::::: -->
    <div class="row justify-content-center">
<!-- ::::::::::::::::::::::::: IMAGE 2 ::::::::::::::::::::::::::::::::::::: -->
      <div class="col-sm-6">
        <div>
          <center>
            <img class="img-responsive" src="../img/event/<?php echo $unResultat['designation']?>2.jpg" alt="VotreImage" >
          </center>
        </div>
      </div>
<!-- ::::::::::::::::::::::::: TEXTE 2 ::::::::::::::::::::::::::::::::::::: -->
      <div class="col-sm-6">
      <br/>
       <center style="margin-right:180px">
          <h2  class="font-weight-light">Description</h2>
          <br/>
       </center>
            <p  class="font-weight-light" style="margin-right:180px"><?php echo $unResultat['description']?></p>
    </div>
  </div>
<!--::::::::::::::::::::::::::::::: LIGNE  :::::::::::::::::::::::::::::::::::: -->
  <div class="row">
     <div class="col-sm-12"><hr></div>
  </div>
<!-- ::::::::::::::::::::::::::::::::::: SECTION 1 ::::::::::::::::::::::::::::::: -->
 <div class="row justify-content-center">
<!-- ::::::::::::::::::::::::: TEXTE 1 ::::::::::::::::::::::::::::::::::::: -->
   <div class="col-sm-6">
      <br/>
       <center style="margin-left:180px">
          <h2  class="font-weight-light">Horaires :</h2>
          <br/>
       </center>
            <p  class="font-weight-light" style="margin-left:180px"><?php echo $unResultat['horaires']?></p>
    </div>
<!-- ::::::::::::::::::::::::::::: IMAGE 1 ::::::::::::::::::::::::::::::::::::: -->
      <div class="col-sm-6">
        <div>
          <center>
            <img class="img-responsive" src="../img/event/<?php echo $unResultat['designation']?>3.jpg" alt="VotreImage">
          </center>
        </div>
      </div>
  </div>

    
 <?php 
                            }
                        }?>
</body>
<style>
  /* :::::::::::::::::::::::::::::::::: ICONE ::::::::::::::::::::::::::::::::::::: */
  .fa {
    color: rgb(116,177,161);
    background-color: white;
    margin: 5px;
    width: 50px;
    padding-bottom: 17px;
    padding-top: 17px;
    border-radius: 50%;
  }
  .fa.fa-facebook:hover {
  background-color:  rgb(57,84,152);
  color: white;
  }
  .fa.fa-twitter:hover {
  background-color:  rgb(97,163,235);
  color: white;
  }
  .fa.fa-instagram:hover {
  background-color: rgb(247,74,83);
  color: white;
  }

  .fa.fa-snapchat:hover {
  background-color:  rgb(247,244,1);
  color: white;
  } 

  html{
   scroll-behavior: smooth;
}

</style>

</html>