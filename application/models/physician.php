<?php

class physician extends Eloquent {
	public static $table = 'physician';
    public static $timestamps = false;
	
	 public function interests()
     {
          return $this->has_many_and_belongs_to('interests');
     }
	 
	 public function savedsearch()
     {
          return $this->has_many('savedsearch');
     }
}