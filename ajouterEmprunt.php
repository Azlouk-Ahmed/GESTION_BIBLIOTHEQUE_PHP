<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h3>ajouter un emprunt</h3>
        <table class="table-info">
            <tr>
                <td>id</td>
                <td>
                    <select name="id" id="">
                        <?php
                        require_once("adherent.php");
                        $adherent = new adherent();
                        $result = $adherent->afficher();
                            while($row = mysqli_fetch_array($result)){ 
                            $id = $row["idAdherent"]; 
                            echo "<option value=$id>$id</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>code livre</td>
                <td>
                    <select name="code" id="">
                        <?php
                        require_once("document.php");
                        $doc = new document();
                        $result = $doc->afficherLiv();
                        while($row = mysqli_fetch_array($result)){ 
                            $id = $row["code"]; 
                            echo "<option value=$id>$id</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>date emprunt</td>
                <td>
                <input type="date" name="date" id="">
                </td>
            </tr>
            <tr>
                <td>date retour</td>
                <td><input type="date" name="retour" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-danger" value="enregistrer"></td>
            </tr>
        </table>
    </form>
    <?php
    require_once("emprunt.php");
    if(!empty($_POST)){
        $dic = new emprunt();
        $dic->ajouterEmp($_POST['id'],$_POST['code'],$_POST['date'],$_POST['retour']);
        header('Location:listeEmprunt.php');
    }
    ?>
</body>
</html>