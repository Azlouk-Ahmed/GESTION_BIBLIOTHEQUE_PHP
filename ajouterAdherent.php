<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type="text"] {
            width: 30%;
        }
    </style>
</head>
<body class="bg-success p-2" style="--bs-bg-opacity: .5;">
    <form action="" method="post">
        lidentifiant : <input class="form-control" type="text" name="id" ><br>
        le nom : <input class="form-control" type="text" name="nom" ><br>
        le prenom : <input class="form-control" type="text" name="prenom" ><br>
        la ville : <input class="form-control" type="text" name="ville" ><br>
        <input type="submit" class="btn btn-success" value="ajouter">
    </form>
    <?php
    if(!empty($_POST)){
        require_once("adherent.php");
        $adh = new adherent($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['ville']);
        $adh->ajouter_adherant();
        header('Location:listeAdhrent.php'); 
    }
    ?>
</body>
</html>
