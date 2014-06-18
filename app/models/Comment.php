<?php

class Comment extends Eloquent {	
	public $timestamps = false;
    protected $table = 'comment';
	protected $hidden = array('password', 'remember_token');
	public static $rules = array(
	'content'=>'required',
    'rating'=>'required'
    );
}

?>