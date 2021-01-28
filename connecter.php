<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title></title>
</head>
<body>
    <div class="container ">
        <div class="row mt-5">
            <div class="offset-3"></div>
            <div class=" section col-4  border">
                <form  action="traiterConnexion.php " method="post">
                   
                  <h3>Connexion</h3>
                    <hr>
                    <div class="form-group">
                        <label class="control-label"> Adresse email : </label>
                        <input type="text" name="email" class="form-control" title="poste" required/>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Mot de pass : </label>
                        <input type="text" name="password" class="form-control" title="identifiant" required/>
                    </div>
                        <button type="submit" name="submit" class="btn btn-primary" value="seconnecter"> Se connecter 
                        </button>
                 </form> 
            </div>
            <div class="offset-3"></div>
        </div>
   </div>
</body>
</html>