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
     
       
    <div id="connexion-form" class="w-25">

                    
<div class="connexion-form-header">
    <h3 class="bgPrimary h5 p-3 m-0">Login form</h3>
    
</div>

<div class="connexion-form-body bgWhite p-3">
      <?php
            if(isset($err_login)){ 
         ?>
            <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$err_login?></small>
        <?php
            }
        ?>
    <form class="py-2" method="post" action="">
        <div class="form-group ">
            <input type="text" placeholder="Login" name="login" class="form-control" id="email">
         <?php
            if(isset($errors['login'])){ 
         ?>
            <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['login']?></small>
        <?php
            }
        ?>
        
        </div>

        <div class="form-group py-2">
            <input type="password" placeholder="Password" name="password" class="form-control">
            <?php
            if(isset($errors['password'])){ 
            ?>
            <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['password']?></small>
        <?php
            }
        ?>
        </div>


        <button type="submit" class="btn btn-primary" name="btn_connexion">Connexion</button>
        <a href="#" class="text-secondary pl-5">S'inscrire pour jouer</a>
    </form>
</div>

</div>



        


</body>

</html>

