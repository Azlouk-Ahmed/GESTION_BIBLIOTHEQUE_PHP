<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="">
    <?php if(isset($_GET['msg'])){echo $_GET['msg'].'<br>';}?>
    <table border="1" class="table table-sm">
        <tr>
            <td>idAdhrent</td>
            <td>nom</td>
            <td>prenom</td>
            <td>ville</td>
            <td>modifier</td>
            <td>supprimer</td>
        </tr>
        <?php
        require_once("adherent.php");
        $adherent = new adherent();
        $result = $adherent->afficher();
            while($row = mysqli_fetch_array($result)){ 
            $id = $row["idAdherent"]; 
            $nom = $row["nom"]; 
            $prenom = $row["prenom"]; 
            $ville = $row["ville"];
            echo "<tr>";
            echo "<td>$id</td><td>$nom</td><td>$prenom</td><td>$ville</td><td><a href='modifierAdherent.php?id=$id'>modifier</a></td><td><a href='supprimerAdherent.php?id=$id'>supprimer</a></td></td>"; 
            echo "</tr>";
        }
        ?>
    </table>
    <a class="btn btn-success" href="ajouterAdherent.php">ajouter un autre</a>
</body>
</html>