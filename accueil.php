<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" class="table table-bordered border-primary">
        <tr>
            <td><a href="listeAdhrent.php">les adherents</a></td>
            <td><a href="listeDocument.php">les document</a></td>
            <td><a href="listeEmprunt.php">les emprunts</a></td>
        </tr>
    </table>
    <br><br>
    <a class="btn btn-danger" href="deconnecter.php">deconnecter</a>
    <?php

$link = mysqli_connect('localhost', 'root', '', 'bibliotheque'); 
session_start(); 
$sql="select * from admin where login='".$_SESSION['email']."' and mdp='".$_SESSION['mdp']."'; ";
$res=mysqli_query($link,$sql);
$nb=mysqli_num_rows($res);
	if ($nb == 0){
        header('Location:login.php');
	}
?>
</body>
</html>