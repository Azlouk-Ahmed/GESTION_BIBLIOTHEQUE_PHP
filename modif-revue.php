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
    <table border="1">
                <tr>
                    <td>code</td>
                    <td><input class="form-control" type="text" disabled name="auteur" <?php echo "value=".$_GET["id"] ?> id=""></td>
                </tr>
                <tr>
                    <td>mois edition</td>
                    <td><input class="form-control" type="text" name="mois" id=""></td>
                </tr>
                <tr>
                    <td>annee edition</td>
                    <td><input class="form-control" type="text" name="annee" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-success" type="submit" value="ajouter"></td>
                </tr>
            </table>
    </form>
    <?php
    require_once("revue.php");
    if(!empty($_POST)){
        $rev = new revue();
        $rev->modifRev($_GET['id'],$_POST['mois'],$_POST['annee']);
        header("Location: listeDocument.php");
    }
    ?>
</body>
</html>