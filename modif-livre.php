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
                    <td><input type="text" disabled name="id" <?php echo "value=".$_GET["id"] ?> id=""></td>
                </tr>
                <tr>
                    <td>auteur</td>
                    <td><input type="text" class="form-control" name="auteur" id=""></td>
                </tr>
                <tr>
                    <td>nombre de pages</td>
                    <td><input class="form-control" type="text" name="nbr" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-danger" type="submit" value="ajouter"></td>
                </tr>
            </table>
    </form>
    <?php
    require_once("livre.php");
    if(!empty($_POST['auteur'])&&!empty($_POST['nbr'])){
        $dic = new livre();
        $dic->modifLiv($_GET["id"],$_POST['auteur'],$_POST['nbr']);
        header("Location: listeDocument.php");
    }
    ?>
</body>
</html>