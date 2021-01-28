<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <title>Inscription</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-3"></div>
           
            <div class="col-5 border secte">
                <form action="traitement.php" method="post">
                    <h3>Inscription</h3>
                    <hr>
                    <div class="form-group">
                        <label class="control-label"> Nom : </label>
                        <input type="text" name="nom" class="form-control" title="poste" required/>
                     </div>
                     <div class="form-group">
                        <label class="control-label"> Prenom : </label>
                        <input type="text" name="prenom" class="form-control" title="identifiant" required/>
                        </div>
                        <div class="form-group">
                        <label class="control-label"> Adresse email : </label>
                        <input type="text" name="email" class="form-control" title="poste" required/>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Mot de pass : </label>
                        <input type="password" name="password" class="form-control" title="identifiant" required/>
                    </div>
                    
                   
                        
                        <button type="submit" name="submit" class=" bouton" value="sinscrire"> CREER UN COMPTE 
                        </button><br>
                      <h6 class="compte"> <a href="connecter.php" > Déjà un compte?</a></h6>  

                </form>
            </div>
            <div class="offset-3"></div>
        </div>
    </div>
</body>
</html>