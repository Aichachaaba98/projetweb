<?PHP
include "../core/bazart.php";
$pro1 = new prodC();
$listeprod = $pro1->afficherproduit();
if(!isset($_GET['rechercher']))
{
$listeprod = $pro1->afficherproduit();
}
else
{
    $listeprod=$pro1->rechercherproduit($_GET['rechercher'],$_GET['champs']);
}

?>
<!doctype html>
<!DOCTYPE html >
 
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
 <style>
{
  box-sizing: border-box;
}

#myInput {
  background-image: url('searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 25%;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
#myInput[type=text]:focus{
    width: 100%;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
}
  border: 1px solid #ddd;
  font-size: 18px;

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header {
  background-color: #0e0c28;
  color: white;
}
#myTable tr:hover{
    background-color: #abcdef;
  color: white;

}
* {box-sizing: border-box;}
</style>
  </head>

  <body  >
     



<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('Table');
       var popupWin = window.open('', '_blank', 'width=900,height=700');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
<script>
function 
myFunction() {
                                        var input, filter, table, tr, td, i, txtValue;
                                        input = document.getElementById("myInput");
                                        filter = input.value.toUpperCase();
                                        table = document.getElementById("myTable");
                                        tr = table.getElementsByTagName("tr");
                                        for (i = 0; i < tr.length; i++) {
                                            td = tr[i].getElementsByTagName("td")[0];
                                            if (td) {
                                                txtValue = td.textContent || td.innerText;
                                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                    tr[i].style.display = "";
                                                } else {
                                                    tr[i].style.display = "none";
                                                }
                                            }       
                                        }
                                    }
</script>

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
              
                
            </div>
        </nav>
    </aside>

   

    <div id="right-panel" class="right-panel">

        
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

        </header>





        <div class="breadcrumbs">
                <div class="col-lg-8">
                    <div class="card">

                    <div class="card-header">
                            <strong>Afficher </strong> Les Produits
                        </div>
                    <br><br>
                    <div class="card-body">
                       
 
      <br><br>
 <div id='Table'>
<form method="GET" action="afficherlisteproduit.php " class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" name="rechercher" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
                                    </td>
                                    <td>
                                        <select name="champs"> 
                                        <option selected>id_produit</option>
                                         <option>nom</option>
                                          <option>id_categorie</option>
                                           <option>description</option>
                                           <option>prix</option>
                                            <option>lienimage</option>
                                        </select>
                                          </form>
                                          <table border="1"  id="myTable" class="card  card-cascade table-striped table-responsive-md btn-table"  >


  <tr>
      <th> id_produit </th>
  
    <th>nom</th>
    <th>categorie</th>
    <th>description</th>
    <th>prix</th>
    <th>lienimage</th>
    <th></th>
    <th></th>


    
  </tr>
  </div>
  <?PHP
  foreach ($listeprod as $row) {
    ?>
    <tr>
    <td><?PHP echo $row['id_produit']; ?></td>

  
      <td><?PHP echo $row['nom']; ?></td>  
      <td><?PHP echo $row['id_categorie']; ?></td>
      <td><?PHP echo $row['description']; ?></td>
      <td><?PHP echo $row['prix']; ?></td>
      <td><?PHP echo $row['lienimage']; ?></td>



           <td>
        
        <form method="POST" action="modifierproduit.php">
          <input type="submit" name="modifier" value="modifier" class="btn btn-outline-primary btn-sm m-0 waves-effect">
          <input type="hidden" value="<?PHP echo $row['id_produit']; ?>" name="id_produit">

        </form>

        </td>

        <td>
        <form method="POST" action="supprimerproduit.php">
          <input type="submit" name="supprimer" value="supprimer" class="btn btn-outline-primary btn-sm m-0 waves-effect">
          <input type="hidden" value="<?PHP echo $row['id_produit']; ?>" name="id_produit">

        </form>
      </td>

      

      

    
      
    
    </tr>  
      
  
  <?PHP
  }
  ?>
</table>

<br><br>
<button onclick="PrintDiv();" class="btn btn-outline-primary btn-sm m-0 waves-effect">  imprimer </button>
<br><br>
 <a href="TelechargerListe.php"><button  class="btn btn-outline-primary btn-sm m-0 waves-effect"> télecharger </button> </a>

</div>

 


      

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
</html>
