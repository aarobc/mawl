<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;



class Asset extends Eloquent {
  
   public function notes(){
      return $this->hasMany('Note');
   }

   public function status(){
      //return $this->has('Status');
      return Status::find($this->status_id);
   }

   public function location(){
      //return $this->has('Location');
      return Location::find($this->location_id);
   }

   public function category(){
      //return $this->has('Category');
      return Category::find($this->category_id);
   }

}
