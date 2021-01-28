<?php
try{
  $db = new PDO ('mysql:host=localhost; dbname=listeapprenantbd', 'root', '');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
      die('Erreur'.$e -> getMessage());
      
}   
      if(extension_loaded('PDO')){
      
}
?>