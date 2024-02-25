<?php
class adherent {
        public $id,$nom,$prenom,$ville;
    function __construct(){
    $num=func_num_args();
        switch($num)
        {
            case 4:
                $this->id=func_get_arg(0);
                $this->nom=func_get_arg(1);
                $this->prenom=func_get_arg(2);
                $this->ville=func_get_arg(3);
                break;
            default:
        }
    }
    function afficher(){
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $query='SELECT * FROM `adherent` ';
        $result=$mysqli->query($query);
        return $result;
        $mysqli->close();
    }
    function modifAdherent($id,$nom,$prenom,$ville){
    require_once('config.php');
    $mysqli=new mysqli(db_host,db_user,db_password,db_database);
    $query="UPDATE `adherent` SET `nom` = '$nom', `prenom` = '$prenom', `ville` = '$ville' WHERE `adherent`.`idAdherent` ='$id'; ";
    echo $query;
    $mysqli->query($query);
    }
    function supprimer($id)
    {
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $req='delete from adherent where idAdherent='.$id;
        $mysqli->query($req);
        $mysqli->close();
    }
    function ajouter_adherant()
    {
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $req="insert into `adherent` values('$this->id','$this->nom','$this->prenom','$this->ville');";
        $mysqli->query($req);															
        $mysqli->close();
    }
}
?>