<?php

class Review extends Eloquent {	
	public $timestamps = false;
    protected $table = 'review';
	protected $hidden = array('password', 'remember_token');
}

?>