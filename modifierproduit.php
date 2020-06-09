<HTML>

 <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Baz'art</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">

    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

  </head>


<body >
     <!--  <div class="container">
                <div class="container pt-5">
        <div class="">
                <a href="page off.php"><img src="logo.png" alt=""/></a>
<br><br>

<div class="at-loginarea float-right">
            <form method="POST" action="afficherlisteproduit.php">
          <input type="submit" name="offre" value="voir produit" class="btn btn-outline-primary btn-sm m-0 waves-effect">
            </form>
            </div>
            <br>
              </div>
              <div class="card card-register mx-auto mt-5">-->
<!-- ********************************************** -->

 <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img style="padding: 20px" src="logo.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    

                       
                <li ><a href=""> <i class="menu-icon fa fa-table"></i>gestion clients</a>       </li>
                       
                <li ><a href="afficherlisteproduit.php"> <i class="menu-icon fa fa-table"></i>gestion des commandes</a>       </li>
                                    </li>          
                      

                    <!--CHTOUROU PART -->
                           
               <ul class="nav navbar-nav">
                    <li class="menu-item-has-children dropdown">

                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="menu-icon fa fa-table"></i>gestion produits
                     </a>

                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="menuP.html">Produits</a></li>
                            
                         
                            <li><i class="fa fa-table"></i><a href="menuC.html">Catégories </a></li>
                            
                         </ul>
                   
                   
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Gestion livraison</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="a.php">livraison</a></li>
                            <li><i class="fa fa-table"></i><a href="c.php">livreurs</a></li>
                           
                        </ul>
                    </li>
                   
                    </li>
                    
                         <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>gestion Réclamation</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="addPublicite.html">les réclamations</a></li>
                            <li><i class="fa fa-table"></i><a href="updatePub.php">les avis</a></li>
                           
                        </ul>
                    </li>
      
      </li>
                    
                         <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>gestion promotions</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="addPublicite.html">Nos promotions</a></li>
                            <li><i class="fa fa-table"></i><a href="updatePub.php">les offres</a></li>
                           
                        </ul>
                    </li>

                   
                  
                   
                </ul>
                <!--CHTOUROU PART -->
                
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                
                <div class="col-sm-12">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
<!--***********************************************************----->




        <div class="breadcrumbs">
                <div class="col-lg-8">
                    <div class="card">

                    <div class="card-header">
                            <strong>Modifier </strong> Produit
                        </div>
                    <br><br>
                    <div class="card-body">
                        <!-- ********************************************** -->

	<?PHP
    include "../entities/produit.php";
	include "../core/bazart.php";

  $categ1 = new categC();
$listecateg = $categ1->affichercategorie();


	if (isset($_POST['id_produit'])) {
		$prodC = new prodC();
		$result = $prodC->recupererproduit($_POST['id_produit']);
	 foreach ($result as $row) {
        $id_produit = $row['id_produit'];

			$nom = $row['nom'];
			$categorie= $row['id_categorie'];
			$description = $row['description'];
			$prix = $row['prix'];
			?>


 <form method="POST" action="modifierproduit.php" name="formulaire" novalidate="novalidate" enctype="multipart/form-data" >

         <div class="card-body card-block">
          <table >
          


              <tr>
                  <div class="col col-md-3">
                    <label  class=" form-control-label">id produit</label>
                   </div>
                 <div class="col-12 col-md-9">
                 <input type="number" name="id_produit" class="form-control" value="<?PHP echo $id_produit ; ?>" id="id_produit"required>
                                 
                </div>
                <center>
                <div id="id_produit1"></div></center>
                  
             </tr>
  

              <tr>
                  <div class="col col-md-3">
                    <label  class=" form-control-label">Nom</label>
                   </div>
                 <div class="col-12 col-md-9">
                 <input type="text" class="form-control" name="nom" value="<?PHP echo $nom ; ?>" id="nom"required >
                                 
                </div>
                <center>
                <div id="nom1"></div></center>
              
                  
             </tr>

            <tr>
                   <div class="col col-md-3">
         <label for="testimonialTitle" class=" form-control-label">Categories</label>
               </div>
                  <div class="col-12 col-md-9">
                    <select name="categorie" class="form-control" id="categorie"required>
                      <?PHP
          foreach($listecateg as $row){
          ?>
                      <option value="<?php echo $row['id_categorie']; ?>" > <?php echo $row['nom']; ?> </option>
                     <?php } ?>
            
                  </select>
                </div>
                 <center>
                <div id="categorie1"></div></center>


              </tr>


              <tr>
                  <div class="col col-md-3">
                    <label  class=" form-control-label">description</label>
                   </div>
                 <div class="col-12 col-md-9">
                 <input type="text" name="description" class="form-control" value="<?PHP echo $description ; ?>" id="description" required>
                                 
                </div>
                 <center>
                <div id="description1"></div></center>
                  
             </tr>


             
              <tr>
                  <div class="col col-md-3">
                    <label  class=" form-control-label">Prix</label>
                   </div>
                 <div class="col-12 col-md-9">
                 <input type="number" name="prix" class="form-control" value="<?PHP echo $prix ; ?>"  id="prix"required>
                                 
                </div>
                <center>
                <div id="prix1"></div></center>

              </tr>

            
             
        
             
<tr><td>
              <div class="at-loginarea float-right">
            
          <input  type="submit" name="Modifier" value="Modifier"  class="btn btn-outline-primary btn-sm m-0 waves-effect" onclick="return verif()">
            
            </div>
</td>
      </tr>
  <tr>
            <td></td>
            <td><input type="hidden" name="idp" value="<?PHP echo $_POST['id_produit']; ?>"></td>
          </tr>
       </table> 

     
      </form>
			<?PHP
		}
	}
    if (isset($_POST['id_produit']) && isset($_POST['nom']) && isset($_POST['categorie']) &&  
    isset($_POST['description']) &&  isset($_POST['prix']) ) {
		$produit= new produit ($_POST['id_produit'],$_POST['nom'], $_POST['categorie'], $_POST['description'], $_POST['prix'],NULL);
        $produitC=new prodC();
		$produitC->modifierproduit($produit, $_POST['idp']);
		echo $_POST['idp'];
		
     echo " <script> window.location.assign('afficherlisteproduit.php'); </script>";
	}
    ?>
           <!-- ******************************************* -->
           </div>
        </div>
      </div>
      <div class="at-loginarea float-right">
            <form method="POST" action="afficherlisteproduit.php">
          <input type="submit" name="offre" value="voir produit" class="btn btn-outline-primary btn-sm m-0 waves-effect">
            </form>
            </div>


                
              <!-- ******************************************* -->
          <!--  </div>
        </div>
      </div>-->
       <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>



 <script >
                              function verif(){
      if(document.formulaire.id_produit.value == ""){
        
            document.getElementById("id_produit").style.backgroundColor = "#FFA07A" ;
            document.getElementById("id_produit1").textContent = "Veuillez remplir ce champs" ;
            return false ;

   

      }else if(document.formulaire.nom.value == ""){
        
            document.getElementById("nom").style.backgroundColor = "#FFA07A" ;
            document.getElementById("nom1").textContent = "Veuillez remplir ce champs" ;
            return false ;

    }else if(document.formulaire.categorie.value == ""){
        document.getElementById("categorie").style.backgroundColor = "#FFA07A" ;
            document.getElementById("categorie1").textContent = "Veuillez remplir ce champs" ;
            return false ;
    }else if(document.formulaire.description.value == ""){
        document.getElementById("description").style.backgroundColor = "#FFA07A" ;
            document.getElementById("description1").textContent = "Veuillez remplir ce champs" ;
            return false ;
    }else if(document.formulaire.prix.value == ""){
        document.getElementById("prix").style.backgroundColor = "#FFA07A" ;
            document.getElementById("prix1").textContent = "Veuillez remplir ce champs" ;
            return false ;
    }else{return true ;}
}



                          </script>



    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
</body>

</HTMl>