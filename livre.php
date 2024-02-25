<?php
class livre {
    public $code,$auteur,$nbrePages;
    function __construct(){
        $num=func_num_args();
        switch($num)
        {
            case 3:
                $this->code=func_get_arg(0);
                $this->auteur=func_get_arg(1);
                $this->nbrePages=func_get_arg(2);
                break;
                default:
        }
    }
    function ajouterLiv(){
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $req="insert into `livre` values($this->code,'$this->auteur','$this->nbrePages');";
        $mysqli->query($req);															
        $mysqli->close();
    }
    function modifLiv($id,$auteur,$nbr){
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $query="UPDATE `livre` SET `auteur` = '$auteur' , nbrePages ='$nbr' WHERE `code` = $id";
        $mysqli->query($query);
    }
}
?>