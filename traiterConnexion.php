<?php
require_once 'connexion.php';
$password = $_POST['password'];
$email = $_POST['email'];



try{
        $sql="INSERT INTO newuser ( pasword,email) VALUES(:pwd ,:email)";
        $req=$db->prepare($sql);
        $req-> execute(array(         
                'pwd'=>$password,
                'email'=>$email
      ));  
        $message="login inscrit avec success";
       echo $message;}
        catch(PDOException $e) { $e->getMessage(); 
        echo $e;}