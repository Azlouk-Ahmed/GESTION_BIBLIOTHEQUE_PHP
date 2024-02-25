<?php
class emprunt {
    public $id,$code,$date,$dateRetour;
    function __construct(){
        $num=func_num_args();
        switch($num)
        {
            case 4:
                $this->id=func_get_arg(0);
                $this->code=func_get_arg(1);
                $this->date=func_get_arg(2);
                $this->dateRetour=func_get_arg(3);
                break;
                default:
        }
    }
    function ajouterEmp($id,$code,$date,$dateRet){
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $req="INSERT INTO `emprunt` (`idAdhrent`, `code`, `dateEmprunt`, `dateRetour`) VALUES ('$id', '$code', '$date', '$dateRet');";
        $mysqli->query($req);															
        $mysqli->close();
    }
    function modifEmp($id,$code,$date){
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $query="UPDATE `emprunt` SET `dateRetour` = '$date' WHERE idAdhrent = '$id' and `code` = $code";
        $mysqli->query($query);
    }
    function afficherEmp(){
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $query='SELECT * FROM `emprunt` where dateRetour = "00-00-0000" ';
        $result=$mysqli->query($query);
        return $result;
        $mysqli->close();
    }
    function afficherEmpRet(){
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $query='SELECT * FROM `emprunt` where dateRetour <> "00-00-0000" ';
        $result=$mysqli->query($query);
        return $result;
        $mysqli->close();
    }
}
?>