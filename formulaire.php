<!DOCTYPE html>
<html>
<head>
	<title> Tienda</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link href="carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/normailze.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
    <script type="text/javascript" scr="js/modernizr.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include("menu.php");?>
  <div class="container">
       
     
      <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate enctype="multipart/form-data" action="uploader.php" method="POST">
                        <div class="row control-group">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="nom" class="form-control" placeholder="Nom" id="name">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group">
                                <label>Address Email </label>
                                <input type="email" name="email" class="form-control" placeholder="Address Email" id="email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="tel" name="Tel"class="form-control" placeholder="Numero" id="phone">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                          <div class="row control-group">
                            <div class="form-group">
                                <label>Departement</label>
                               <SELECT NAME="departamento" SIZE=1 class="form-control"> 
                                    <OPTION VALUE="Artibonite">Artibonite</OPTION>
                                    <OPTION VALUE="Centre">Centre</OPTION>
                                    <OPTION VALUE="Grande Anse">Grande Anse</OPTION>
                                    <OPTION VALUE="Nippes">Nippes</OPTION>   
                                    <OPTION VALUE="Nord">Nord</OPTION> 
                                    <OPTION VALUE="NNord-Est">Nord-Est</OPTION> 
                                    <OPTION VALUE="Nord-Ouest">Nord-Ouest</OPTION>
                                    <OPTION VALUE="Ouest">Ouest</OPTION> 
                                    <OPTION VALUE="Sud">Sud</OPTION>
                                    <OPTION VALUE="Sud-esr">Sud-ESt</OPTION> 

                              </SELECT> 
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                           <div class="row control-group">
                            <div class="form-group">
                                <label>ville</label>
                                <input type="text" name="ville" class="form-control" placeholder="Ville" id="name">
                                <p class="help-block text-danger"></p>
                            </div>
                          </div>
                         <div class="row control-group">
                            <div class="form-group">
                                <label>Categorie</label>
                                <input type="text" name="categorie" class="form-control" placeholder="Categorie" id="categorie">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                             <div class="row control-group">
                            <div class="form-group">
                                <label>Titre</label>
                                <input type="text" name="titre"class="form-control" placeholder="Titre" id="titre">
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                            <div class="row control-group">
                            <div class="form-group ">
                                <label>Description</label>
                                <textarea rows="7" name="descripcion" class="form-control" placeholder="Description" id="message"></textarea>
                            </div>
                        </div>
                         <div class="row control-group">
                            <div class="form-group ">
                                <label>Prix</label>
                                <input type="text" name="prix"class="form-control" placeholder="Prix" id="prix">
                            </div>
                        </div>
                       <div class="row control-group">
                        <div class="form-group">
                        <input name="uploadedfile" type="file" />
                        </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>

                    </form>
                </div>
              </div>
     
     <?php include("pie.php");?> 
   </div>
    
</body>
</html>