<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-success p-2" style="--bs-bg-opacity: .5;">
    <form action="" method="post">
        email : <input class="form-control" type="text" name="email" id=""> <br>
        mot de passe : <input class="form-control" type="text" name="mdp" id=""> <br>
        <input type="submit" class="btn btn-success" value="connection">
    </form>
    <?php 

if($_POST) {  
    if(!empty($_POST['email']) && !empty($_POST['mdp'])) { 
    define('email',$_POST['email']); 
    define('mdp',$_POST['mdp']); 
    session_start();  
    $_SESSION['email'] = email; 
    $_SESSION['mdp'] = mdp; 
    header('Location: accueil.php'); 
    exit();}
}?>
</body>
</html>