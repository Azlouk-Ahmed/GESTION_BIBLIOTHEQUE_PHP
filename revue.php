<?php
class revue {
    public $code,$mois,$annee;
    function __construct(){
        $num=func_num_args();
        switch($num)
        {
            case 3:
                $this->code=func_get_arg(0);
                $this->mois=func_get_arg(1);
                $this->annee=func_get_arg(2);
                break;
                default:
            }
    }
    function ajouterRev(){
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $req="insert into `revue` values ('$this->code','$this->mois','$this->annee');";
        $mysqli->query($req);															
        $mysqli->close();
    }
    function modifRev($id,$mois,$annee){
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $query="UPDATE `revue` SET `moisEdition` = '$mois' , anneeEdition ='$annee' WHERE `code` = $id";
        $mysqli->query($query);
    }
}
?>