<?php

class Picture extends Eloquent {	
	public $timestamps = false;
    protected $table = 'picture';
	protected $hidden = array('password', 'remember_token');
}

?>