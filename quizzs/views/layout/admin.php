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

    <div id="main" class="d-flex justify-content-center align-items-center ">

    <div style="background-color: #fefefe;width: 936px;height: 666px;margin: 30px -2px 7px 73px;padding: 0px;">
        <div class="d-flex" style="background-color: #51bfd0;height: 72px;">
            <h1 style="font-family: 'Alegreya Sans SC', sans-serif;font-size: 38px;margin: 13px 106px 0px 195px;color: rgb(248,253,253);">créer et paramétrer vos quizz</h1>
            <button class="btn btn-primary" href="<?=URL_ROOT?>/security/seDeconnecter" type="button" style="height: 39px;width: 134px;margin: 17px 0px 0px 0px;background-color: rgb(58,221,214);">Déconnexion</button></div>
        <div class="d-flex flex-row" style="margin: 31px 0px;">
            <div class="border rounded-0" style="height: 383px;background-color: #fefefe;width: 374px;margin: 21px 25px 0px 7px;">
                <div style="background-color: rgba(229,246,255,0);height: 113px;padding: 16px;background: linear-gradient(180deg, #F4F7F8, #51BFD0);">
                    <div class="border rounded-circle border-dark" style="height: 89px;width: 89px;margin: -7px 0px 0px 0px;"></div>
                    <div class="border rounded-circle border-primary" style="height: 68px;width: 68px;margin: -79px 0px 0px 10px;background-color: #ffffff;"><img src="../assets/img/avatar1.png" style="width: 78px;height: 76px;margin: -6px 0px 0px -7px;"></div>
                </div>
                <div class="text-truncate border rounded-0 d-inline-flex" style="width: 373px;padding: 9px;height: 67px;"><a href="#" style="font-size: 25px;width: 310px;color: rgb(129,129,129);">Liste Questions</a><img src="../assets/img/ic-liste.png" style="width: 41px;height: 41px;"></div>
                <div class="text-truncate border rounded-0 d-inline-flex" style="width: 373px;padding: 9px;height: 67px;"><a href="#" style="font-size: 25px;width: 310px;color: rgb(129,129,129);">Créer Admin</a><img src="../assets/img/ic-ajout-active.png" style="width: 41px;height: 41px;"></div>
                <div class="text-truncate border rounded-0 d-inline-flex" style="width: 373px;padding: 9px;height: 67px;"><a href="#" style="font-size: 25px;width: 310px;color: rgb(129,129,129);">Liste Joueurs</a><img src="../assets/img/ic-liste.png" style="width: 41px;height: 41px;"></div>
                <div class="text-truncate border rounded-0 d-inline-flex" style="width: 373px;padding: 9px;height: 67px;"><a href="#" style="font-size: 25px;width: 310px;color: rgb(129,129,129);">Créer Questions</a><img src="../assets/img/ic-ajout.png" style="width: 41px;height: 41px;"></div>
            </div> 

            <div class="border rounded-0 d-inline-flex" style="background-color: #ffffff;height: 456px;width: 514px;margin: -11px 0px 0px 0px;">
                <div class="border-dark" style="background-color: #ffffff;height: 396px;width: 339px;margin: -1px 0px 0px 0px;">
                    <h4 style="margin: 0px;">&nbsp; S'inscrire</h4>
                    <p style="color: rgb(129,129,129);">&nbsp; &nbsp;Pour proposer des quizz<br></p>
                    <div class="border rounded-0"></div>
                    <p style="margin: 0px;color: rgb(129,129,129);">&nbsp; &nbsp;Prénom</p><input class="form-control-sm" type="text" required="" placeholder="Jooo" style="margin: 0px 0px 0px 13px;height: 40px;width: 302px;font-size: 17px;">
                    <p style="margin: 0px;color: rgb(129,129,129);">&nbsp; &nbsp;Nom</p><input class="form-control-sm" type="text" required="" placeholder="WWWW" style="margin: 0px 0px 0px 13px;height: 40px;width: 302px;font-size: 17px;">
                    <p style="margin: 0px;color: rgb(129,129,129);">&nbsp; &nbsp;Login</p><input class="form-control-sm" type="text" required="" placeholder="jow" style="margin: 0px 0px 0px 13px;height: 40px;width: 302px;font-size: 17px;">
                    <p style="margin: 0px;color: rgb(129,129,129);">&nbsp; &nbsp;Password</p><input class="form-control-sm" type="password" required="" placeholder=".........." style="width: 302px;height: 40px;margin: 0px 0px 0px 13px;padding: 0px 0px 22px 10px;font-size: 40px;">
                    <p style="margin: 0px;color: rgb(129,129,129);">&nbsp; &nbsp;Confirmer Password</p><input class="form-control-sm" type="password" required="" placeholder=".........." style="width: 302px;height: 40px;margin: 0px 0px 0px 13px;font-size: 40px;padding: 0px 0px 22px 10px;">
                    <div
                        class="d-inline-flex">
                        <p style="width: 186px;">&nbsp; &nbsp;Avatar</p><button class="btn btn-primary text-center d-lg-flex align-items-lg-start" type="button" style="height: 29px;padding: 0px 4px;background-color: rgb(58,221,214);">Choisir un fichier</button></div>
                <button
                    class="btn btn-primary" type="button" style="height: 27px;padding: 0px;margin: -14px 0px 0px 85px;width: 115px;background-color: rgb(58,221,214);">Créer compte</button>
            </div>
            <div class="border-dark" style="background-color: #ffffff;height: 332px;width: 108px;margin: 0px 0px 0px 0px;">
                <div class="border rounded-circle border-primary" style="width: 140px;height: 140px;margin: 2px 0px 0px 26px;background-color: #ffffff;"><img class="rounded-circle border-warning" src="../assets/img/avatar1.png" style="width: 155px;height: 148px;margin: -3px 0px 0px -10px;background-color: rgba(255,255,255,0);"></div>
                <p class="text-center" style="margin: 0px -76px 0px 3px;font-size: 17px;">Avatar Admin</p>
            </div>
        </div>
    </div>


   
                   

                    
          
</div>
        

</body>

</html>