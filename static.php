<?php
// stattic variable 
class Father{
    public static $a;
    function display($num){
        self::$a=$num;//accessing the satatic varaible by using self keyword
        echo"the value of A:".self::$a;// but non static properties can not be accessed by static method
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
//static with inhertance
class Mother{
    public static $c =150;
}
class Daughter extends Mother
{
    function getValue(){
        echo " the vlaue of C:".self::$c // we can access the statuc varaible using class name , parent or self keyword
    }
}
$object =new Daughter;
$object->getValue;
?>