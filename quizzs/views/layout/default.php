<!doctype html>
<html lang="en">

<head>
    <title>Connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL_ASSETS?>/css/classe.css">


</head>

<body>

<header class="bgSecondary">
    <nav class="nav">

        <div class="logo"><img src="../assets/img/logo-QuizzSA.png" width="40"></div>
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
     
        <?php echo $content_for_layout;?>
        
    </div>

</body>

</html>