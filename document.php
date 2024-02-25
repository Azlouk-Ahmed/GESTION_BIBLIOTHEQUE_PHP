<?php
class document {
    public $code,$titre,$etat;
    function __construct(){
        $num=func_num_args();
        switch($num)
        {
            case 3:
                $this->code=func_get_arg(0);
                $this->titre=func_get_arg(1);
                $this->etat=func_get_arg(2);
                break;
                default:
            }
        }
        function ajouterDoc(){
            require_once('config.php');
            $mysqli=new mysqli(db_host,db_user,db_password,db_database);
            $req="insert into `document` values($this->code,'$this->titre','$this->etat');";
            $mysqli->query($req);															
            $mysqli->close();
        }
        function afficherLiv(){
            require_once('config.php');
            $mysqli=new mysqli(db_host,db_user,db_password,db_database);
            $query="SELECT d.code,titre,etat,auteur,nbrePages FROM document d,livre l where d.code = l.code ";
            $result=$mysqli->query($query);
            return $result;
            $mysqli->close();
        }
        function afficherDic(){
            require_once('config.php');
            $mysqli=new mysqli(db_host,db_user,db_password,db_database);
            $query="SELECT d.code,titre,etat,langue FROM document d,dictionnaire l where d.code = l.code ";
            $result=$mysqli->query($query);
            return $result;
            $mysqli->close();
        }
        function afficherRev(){
            require_once('config.php');
            $mysqli=new mysqli(db_host,db_user,db_password,db_database);
            $query="SELECT d.code,titre,etat,moisEdition,anneeEdition FROM document d,revue l where d.code = l.code ";
            $result=$mysqli->query($query);
            return $result;
            $mysqli->close();
        }
        function supprimer($id)
        {
            require_once('config.php');
            $mysqli=new mysqli(db_host,db_user,db_password,db_database);
            $req='delete from document where code='.$id;
            $mysqli->query($req);
            $mysqli->close();
        }
}
?>