<?php
class People{
   public $firstname;  // property
   public $lastname;  //property

   public function __construct($f,$l){
      $this->firstname = $f;
      $this->lastname = $l;
   }
   public function abc(){  // method
    return 'Public: My name is '.$this->firstname.' '.$this->lastname;
   }

}

$ob = new People('Deepak', 'Tyagi');
echo $ob->abc();


// Using static keyword for property and method
class People1{
    public static $firstname;  // property
    public static $lastname;  //property
 
    public  function __construct($f,$l){
        self::$firstname = $f;
        self::$lastname = $l;
    }
    public static function abc(){  // method
     return 'Static: My name is '.self::$firstname.' '.self::$lastname;
    }
 
 }
 
 $ob = new People1('Deepak', 'Tyagi');
 echo "<br>";
echo People1::abc();


// Private we can use only in only innerside of class
class People2{
    private $firstname;  // property
    private $lastname;  //property
 
     function __construct($f,$l){
       $this->firstname = $f;
       $this->lastname = $l;
    }
     function abc(){  // method
     return 'Private: My name is '.$this->firstname.' '.$this->lastname;
    }
 
 }
 
 $ob = new People2('deepak', 'tyagi');
 echo "<br>";
 echo $ob->abc();


?>