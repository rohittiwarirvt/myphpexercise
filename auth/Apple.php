<?php

class Apple {

	public static $basket = [], $scripts =[];

	public static function addToBasket($grapes) {
    self::$scripts =& self::AppStatic(__CLASS__ . __METHOD__, array());
    self::$scripts[$grapes] = ['type' => $grapes];
    return self::$scripts;
  }

  public static function &AppStatic($name, $default_value = NULL) {
    if (isset(self::$basket[$name]) || array_key_exists($name, self::$basket)) {
      return self::$basket[$name];
    }

    if (isset($name)) {
      return self::$basket[$name] = &$default_value;
    }

    $data = NULL;
    foreach (self::$basket as $key => $value) {
      $data[$key] = $value;
    }
    return $data;
  }


}


class Registry {
    public static $global_registry = array();

    public static function Add($key, $value){
        self::$global_registry[$key] =$value;
    }
    public static function Get($key){
        return self::$global_registry[$key];
    }
    public static function Remove($key){
        unset(self::$global_registry[$key]);
    }
}


// echo "ads";  
 Apple::addToBasket("test/css1");

 Apple::addToBasket("test/css2");
   Apple::addToBasket("test/css3");
   Apple::addToBasket("test/css4");


 print_r(Apple::$scripts);
print_r(Apple::$basket);


//  $test = array("my", "array");
// Registry::Add("config", $test);

//  $test1 = array("my1", "array1");
// Registry::Add("config1", $test1);

// $var = Registry::Get("config");
// $var1 = Registry::Get("config1");
// //$test2[0] = "notmy";    
// var_dump($var);
// var_dump($var1);
// print_r(Registry::$global_registry);