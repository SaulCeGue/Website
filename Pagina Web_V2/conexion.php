<?php
class Database{
    private static $dbName = 'bdfarmamigo';
    private static $dbhost = 'localhost';
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';
    private static $cont = null;

    public function construct (){
        die ('La funcion de inicio no esta permitida');
    }

    public static function connect (){
        if(null == self::$cont){
            try{
                self::$cont = new PDO ("mysql:host=".self::$dbhost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
            }catch(PDOException $e){
                die ($e->getMessage());
            }
        }
        return self::$cont;
    }

    public static function disconnect (){
        self::$cont = null;
    }
}
?>