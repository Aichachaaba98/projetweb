

function etatverif(x){ 
alert("aaaaaaaaaa");

if(x== "0")
  {  
    alert("en attente");
      
      location.assign("suivi_livraison.html");
    
  }
  
 else if(x=="1")
  {  
    alert("en cours");
      
      location.assign("en_cours.html");

  }
  else 
  {  
    alert("livree");
      
      location.assign("livree.html");

  }
  return false;

}