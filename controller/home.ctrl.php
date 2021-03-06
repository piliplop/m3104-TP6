<?php
  require_once("../model/DAO.class.php");

  session_start();
  $login = $_SESSION['login'];

  //met à jour la base de données
  $dao->updateDB();

  $data['login'] = $login;
  $data['sub-success'] = $_GET['sub-success'] ?? -1;

  require_once("../view/homeHead.view.php");

  $data['fluxConnus'] = $dao->getFluxConnus();
  //zone de texte pour ajouter un flux à ses abo
  require_once("../view/abonnement.view.php");

  $data['abonnements'] = $dao->getAbonnements($login);
  //affichage mosaïque des abo
  require_once("../view/home.view.php");
  //require_once("../view/home.view.php");
 ?>
