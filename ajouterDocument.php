<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            display:none;
        }
        form{
            width: 30%;
        }
    </style>
</head>
<body class="bg-success p-2" style="--bs-bg-opacity: .5;">
    <form action="" method="post">
        <table border="1" class="table table-dark table-striped">
            <tr>
                <td>code</td>
                <td><input class="form-control" type="text" name="code" ></td>
            </tr>
            <tr>
                <td>titre</td>
                <td><input class="form-control" type="text" name="titre" ></td>
            </tr>
            <tr>
                <td>etat</td>
                <td><input class="form-control" type="text" name="etat" ></td>
            </tr>
            <tr>
                <td>type</td>
                <td>
                    <select name="s1" id="select" onChange="afficher()">
                        <option value="">choisir un type</option>
                        <option value="livre">livre</option>
                        <option value="dictionnaire">dictionnaire</option>
                        <option value="revue">revue</option>
                    </select>
                </td>
            </tr>
        </table>
        <div class="livre">
            <table border="1" class="table table-dark table-striped">
                <tr>
                    <td>auteur</td>
                    <td><input class="form-control" type="text" name="auteur" id=""></td>
                </tr>
                <tr>
                    <td>nombre de pages</td>
                    <td><input class="form-control" type="text" name="nbr" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="ajouter"></td>
                </tr>
            </table>
        </div>
        <div class="revue">
            <table border="1" class="table table-dark table-striped">
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
                    <td><input type="submit" value="ajouter"></td>
                </tr>
            </table>
        </div>
        <div class="dictionnaire">
            <table border="1" class="table table-dark table-striped">
                <tr>
                    <td>langue dictionnaiere</td>
                    <td><input class="form-control" type="text" name="langue" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-success" type="submit" value="ajouter"></td>
                </tr>
            </table>
        </div>
    </form>
    <?php
    require_once("document.php");
    if(!empty($_POST)){
        $doc = new document($_POST['code'],$_POST['titre'],$_POST['etat']);
        $doc->ajouterDoc();
        require_once($_POST['s1'].".php");
        if($_POST['s1'] == "livre"){
            $liv = new livre($_POST['code'],$_POST['auteur'],$_POST['nbr']);
            $liv->ajouterLiv();
        }
        else if($_POST['s1'] == "dictionnaire"){
            $dic = new dictionnaire();
            $dic->ajouterDic($_POST['code'],$_POST['langue']);
        }
        else if($_POST['s1'] == "revue"){
            $rev = new revue($_POST['code'],$_POST['mois'],$_POST['annee']);
            $rev->ajouterRev();
        }

    }
    ?>
    <a class="btn btn-success" href="liste-documents.php">liste documents</a>
    <script>
        arrDiv = Array.from(document.getElementsByTagName("div"));
        console.log(arrDiv);
        function afficher(){
            className = document.querySelector("#select").value;
            arrDiv.forEach(function(div){
                div.style.display = "none";
            })
            document.querySelector("."+className).style.display ="block";
        }
    </script>
</body>
</html>