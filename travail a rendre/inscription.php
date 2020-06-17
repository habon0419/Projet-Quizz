<!doctype html>
<html lang="en">

<head>
    <title>Connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="ASSETS/css/classe.css">


</head>

<body>

<header class="bgSecondary">
    <nav class="nav">

        <div class="logo"><img src="assets/img/logo-QuizzSA.png" width="40"></div>
            <p class="titre">Le plaisir de jouer</p>

    </nav>
</header>
<style>
    .titre{
  text-align: center;
  color: white;
  font-size: 39px;
  margin:6px 0px 0px 500px;
}
</style>

    <div id="main" class="d-flex justify-content-center align-items-center">
     
        
    <div id="inscription-form" class="w-50 bgWhite container rounded  text-secondary py-2">
            <div class=" inscription-form-header">
                <h1 class="h4 m-0">S'INSCRIRE</h1>
                <p class="mb-1 ">Pour proposer un quizz</p>
                <hr class="w-50 m-0">
            </div>

            <div class="inscription-form-body row">
                <div class="col-md-7">
                     <?php
                        if(isset($err_login)){ 
                     ?>
                        <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$err_login?></small>
                      <?php
                        }
                     ?>
                    <form class="pr-5" method="post" action="">
                        <div class="form-group mb-1">
                            <label class="m-0 p-1" for="prenom">Prenom</label>
                            <input name="prenom" type="text" class="form-control" id="prenom">
                            <?php
                               if(isset($errors['prenom'])){ 
                           ?>   
                                 <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['prenom']?></small>
                         <?php
                          }
                         ?>
                        </div>

                        <div class="form-group mb-1">
                            <label class="m-0 p-1" for="nom">Nom</label>
                            <input name="nom" type="text" class="form-control" id="nom">
                                    <?php
                                    if(isset($errors['nom'])){ 
                                ?>   
                                        <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['nom']?></small>
                                <?php
                                }
                                ?>
                        </div>

                        <div class="form-group  mb-1">
                            <label class="m-0 p-1" for="login">Login</label>
                            <input name="login" type="text" class="form-control" id="login">
                            <?php
                               if(isset($errors['login'])){ 
                           ?>   
                                 <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['login']?></small>
                         <?php
                          }
                         ?>
                        </div>

                        <div class="form-group mb-1">
                            <label class="m-0 p-1" for="password1">Password</label>
                            <input name="password1" type="password" class="form-control" id="password1">
                            <?php
                               if(isset($errors['password1'])){ 
                           ?>   
                                  <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['password1']?></small>
                                 <?php
                               }
                         ?>

                        </div>

                        <div class="form-group mb-1">
                            <label class="m-0 p-1" for="password2">Confirmer Password</label>
                            <input name="password2" type="password" class="form-control" id="password2">

                            <?php
                               if(isset($errors['password2'])){ 
                           ?>   
                                  <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['password2']?></small>
                                 <?php
                               }
                         ?>
                        </div>

                        <div class="form-group  my-2 d-flex justify-content-between">
                            <label class="d-block">Avatar</label>
                            <button class="btn btn-primary d-block">choisir un fichier</button>
                        </div>



                        <button type="submit" name="btn_inscription" class="btn btn-primary">Creer compte</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="avatar w-75 ">
                    <div class="border rounded-circle border-primary" style="width: 250px;height: 250px;margin: -40px 2px 4px 5px;background-color: #ffffff;"><img class="rounded-circle border-success" src="assets/img/avatar1.png" style="width: 285px;height: 279px;margin: -17px 0px 0px -21px;"></div>
                    <p class="text-center" style="margin: 0px 30px 0px -8px;font-size: 23px;width: 300px;color: rgb(0,0,0);">Avatar du joueur</p>
                    </div>
                </div>
            </div>
        
    </div>

</body>

</html>