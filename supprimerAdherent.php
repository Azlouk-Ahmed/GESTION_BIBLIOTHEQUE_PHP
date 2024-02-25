<?php
require_once('adherent.php');
$us=new adherent();
$us->supprimer($_GET['id']);
header('Location: listeAdhrent.php?msg=ladherent qui porte lid '.$_GET['id'].' est supprimé'); 
?>