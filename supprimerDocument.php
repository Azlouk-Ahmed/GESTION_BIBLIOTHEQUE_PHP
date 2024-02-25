<?php
require_once('document.php');
$us=new document();
$us->supprimer($_GET['id']);
header('Location:listeDocument.php'); 
?>