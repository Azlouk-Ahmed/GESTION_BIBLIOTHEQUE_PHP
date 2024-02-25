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
            <td>id</td>
            <td><input class="form-control" type="text" value= <?php echo $_GET['id'] ?> disabled name="id" id=""></td>
        </tr>
        <tr>
            <td>nom</td>
            <td><input class="form-control" type="text" name="nom" id=""></td>
        </tr>
        <tr>
            <td>prenom</td>
            <td><input class="form-control" type="text" name="prenom" id=""></td>
        </tr>
        <tr>
            <td>ville</td>
            <td><input class="form-control" type="text" name="ville" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-danger" type="submit" value="submit"></td>
        </tr>
    </table>
    </form>
    <?php
        if(!empty($_POST)){
            require_once('adherent.php');
            $us=new adherent();
            $us->modifAdherent($_GET['id'],$_POST['nom'],$_POST['prenom'],$_POST['ville']);
            header("Location: listeAdhrent.php");
        }
    ?>
</body>
</html>