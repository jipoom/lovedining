<?php

class Restaurant extends Eloquent {	
	public $timestamps = false;
    protected $table = 'restaurant';
	protected $hidden = array('password', 'remember_token');
}

?>