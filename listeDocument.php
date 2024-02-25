<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <h3>liste de livre</h3>
    <table border="1" class="table table-bordered border-primary">
        <tr>
            <td>code</td><td>titre</td><td>etat</td><td>auteur</td><td>nbr</td>
            <td>modifier</td>
            <td>supprimer</td>
        </tr>
    <?php
        require_once("document.php");
        $doc = new document();
        $result = $doc->afficherLiv();
        while($row = mysqli_fetch_array($result)){ 
            $id = $row["code"]; 
            $titre = $row["titre"]; 
            $etat = $row["etat"]; 
            $auteur = $row["auteur"]; 
            $nbr = $row["nbrePages"]; 
            echo "<tr>";
            echo "<td>$id</td><td>$titre</td><td>$etat</td><td>$auteur</td><td>$nbr</td><td><a href='modif-livre.php?id=$id'>modifier</a></td><td><a href='supprimerDocument.php?id=$id'>supprimer</a></td>"; 
            echo "</tr>";
        }
    ?>
    </table>
    <h3>liste de dictionnaire</h3>
    <table border="1" class="table table-bordered border-primary">
        <tr>
            <td>code</td>
            <td>titre</td>
            <td>etat</td>
            <td>langue</td>
            <td>modifier</td>
            <td>supprimer</td>
        </tr>
        <?php
        $doc = new document();
        $result = $doc->afficherDic();
            while($row = mysqli_fetch_array($result)){ 
            $id = $row["code"]; 
            $langue = $row["langue"];
            $titre = $row["titre"]; 
            $etat = $row["etat"];  
            echo "<tr>";
            echo "<td>$id</td><td>$titre</td><td>$etat</td><td>$langue</td><td><a href='modif-dictionnaire.php?id=$id'>modifier</a></td><td><a href='supprimerDocument.php?id=$id'>supprimer</a></td></td>"; 
            echo "</tr>";
    }
        ?>
    </table >
    <h3>liste de revue</h3>
    <table border="1"  class="table table-bordered border-primary">
        <tr>
            <td>code</td>
            <td>moid edition</td>
            <td>annee</td>
            <td>modifier</td>
            <td>supprimer</td>
        </tr>
        <?php
        $doc = new document();
        $result = $doc->afficherRev();
            while($row = mysqli_fetch_array($result)){ 
            $id = $row["code"]; 
            $mois = $row["moisEdition"]; 
            $annee = $row["anneeEdition"];
            $titre = $row["titre"]; 
            $etat = $row["etat"];  
            echo "<tr>";
            echo "<td>$id</td><td>$titre</td><td>$etat</td><td>$mois</td><td>$annee</td><td><a href='modif-revue.php?id=$id'>modifier</a></td><td><a href='supprimerDocument.php?id=$id'>supprimer</a></td></td>"; 
            echo "</tr>";
    }
        ?>
    </table>
    <a href="ajouterDocument.php" class="btn btn-danger" >ajouter un document</a>
</body>
</html>