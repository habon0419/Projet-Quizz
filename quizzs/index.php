<?php
   define("URL_ASSETS","http://localhost/Projet-Quizz/quizzs/assets");
   define("URL_ROOT","http://localhost/Projet-Quizz/quizzs");
  require_once('./libs/Router.php');
   $router=new Router();
   //controller/methode=>UC
   $router->getRoute();
   /*
   $sec=new Security();
   $sec->showPage();
   $obj->{$method}()
   */
?>