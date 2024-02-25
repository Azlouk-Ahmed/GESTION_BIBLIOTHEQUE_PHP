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
                    <td><input class="form-control" type="text" disabled <?php echo "value=".$_GET["id"] ?> id=""></td>
                </tr>
                <tr>
                    <td>langue dictionnaiere</td>
                    <td><input class="form-control" type="text" name="langue" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-danger" type="submit" value="ajouter"></td>
                </tr>
            </table>
    </form>
    <?php
    require_once("dictionnaire.php");
    if(!empty($_POST)){
            $dic = new dictionnaire();
            $dic->modifDic($_GET['id'],$_POST['langue']);
            header("Location: listeDocument.php");
    }
    ?>
</body>
</html>