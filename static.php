<?php
// stattic variable 
class Father{
    public static $a;
    function display($num){
        self::$a=$num;//accessing the satatic varaible by using self keyword
        echo"the value of A:".self::$a;
    }

}
$obj =new Father;
$obj-> display(120);

//static method
class StaticFun{
    public $b;
    static function showValue($b){
      //$this->b=$b;
      echo "The value of B:".$b;
    }
}
StaticFun::showValue(122);
?>