<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h3>documents emprunté</h3>
<table border="1" class="table table-bordered border-primary">
        <tr>
            <td>id</td>
            <td>code</td>
            <td>date emprunté</td>
            <td>etat</td>
            <td>modifier</td>
        </tr>
        <?php
        require_once("emprunt.php");
        $emp = new emprunt();
        $result = $emp->afficherEmp();
        while($row = mysqli_fetch_array($result)){ 
            $id = $row["idAdhrent"]; 
            $code = $row["code"]; 
            $date = $row["dateEmprunt"]; 
            echo "<tr>";
            echo "<td>$id</td><td>$code</td><td>$date</td><td>non retourné</td><td><a href='modifierEmp.php?id=$id&code=$code'>modifier</a></td>"; 
            echo "</tr>";
        }
        ?>
    </table>
    <h3>documents retourné</h3>
    <table border="1" class="table table-bordered border-primary">
            <tr>
                <td>id</td>
                <td>code</td>
                <td>date emprunté</td>
                <td>modifier</td>
            </tr>
            <?php
            $emp = new emprunt();
            $result = $emp->afficherEmpRet();
            while($row = mysqli_fetch_array($result)){ 
                $id = $row["idAdhrent"]; 
                $code = $row["code"]; 
                $date = $row["dateEmprunt"]; 
                $dateR = $row["dateRetour"]; 
                echo "<tr>";
                echo "<td>$id</td><td>$code</td><td>$date</td><td>$dateR</td>"; 
                echo "</tr>";
            }
            ?>
        </table>
        <a class="btn btn-danger" href="ajouterEmprunt.php">ajouter emprunt</a>
</body>
</html>