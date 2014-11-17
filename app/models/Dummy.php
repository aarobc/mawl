<?php

Class Dummy
{

   private $x = array('a', 'b', 'c');

   public function __call($method, $args) {
      print "Method $method called:\n";
      var_dump($args);
      return '';
      //return $this->x;
   }

   public $name = '';
   public $tag = '';
   public $description = '';
   public $status_id = '';
   public $location_id = '';
   public $category_id = '';
   public $id = '';


}
