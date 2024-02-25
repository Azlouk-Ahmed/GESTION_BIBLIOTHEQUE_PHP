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
    <?php echo "le document $_GET[code] qui est emprunté par ladhrent qui porte lid $_GET[id] est retourné en : "?>
        <input type="date" name="retour" id="">
        <input type="submit" value="enregistrer">
    </form>
    <?php
    require_once("emprunt.php");
    if(!empty($_POST)){
        $dic = new emprunt();
        $dic->modifEmp($_GET['id'],$_GET['code'],$_POST['retour']);
        header('Location:listeEmprunt.php'); 
    }
    ?>
</body>
</html>