<?php
require_once 'connexion.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom']; 
$password = $_POST['password'];
$email = $_POST['email'];



try{
        $sql="INSERT INTO compte ( nom, prenom, pasword,email) VALUES(:nm,:pre,:pwd ,:email)";
        $req=$db->prepare($sql);
        $req-> execute(array(         
                'nm'=>$nom,
                'pre'=>$prenom,
                'pwd'=>$password,
                'email'=>$email
      ));  
        $message="compte inscrit avec success";
       echo $message;}
        catch(PDOException $e) { $e->getMessage(); 
        echo $e;}



?>