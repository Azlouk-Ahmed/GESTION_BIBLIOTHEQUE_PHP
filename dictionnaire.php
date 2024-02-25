<?php
class dictionnaire {
    public $code,$langue;
    function __construct(){
        $num=func_num_args();
        switch($num)
        {
            case 3:
                $this->code=func_get_arg(0);
                $this->langue=func_get_arg(1);
                break;
                default:
        }
    }
    function ajouterDic($code,$langue){
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $req="INSERT INTO `dictionnaire` (`code`, `langue`) VALUES ('$code', '$langue');";
        $mysqli->query($req);															
        $mysqli->close();
    }
    function modifDic($id,$langue){
        require_once('config.php');
        $mysqli=new mysqli(db_host,db_user,db_password,db_database);
        $query="UPDATE `dictionnaire` SET `langue` = '$langue' WHERE `dictionnaire`.`code` = $id";
        $mysqli->query($query);
    }
}
?>