<?php
 
class DataBaseConnector {
    //define static var to hold the object  
    private static $obj;
                 
    private function __construct() {
        //when try instance onther object return this message
        echo __CLASS__ . " initialize only once ";
    }
     
    public static function getConnect() {
        //check the object is instance or not
        if (!isset(self::$obj)) {
            //create new object
            self::$obj = new DataBaseConnector();
        }
         
        return self::$obj;
    }
}
 
$obj1 = DataBaseConnector::getConnect();
$obj2 = DataBaseConnector::getConnect();
var_dump($obj1);
var_dump($obj2);
// var_dump($obj1 == $obj2);
?>