<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent  implements UserInterface, RemindableInterface {
	
	use UserTrait, RemindableTrait;	
	public $timestamps = false;
    protected $table = 'temp_user';
	protected $hidden = array('password', 'remember_token');
	public static $rules = array(
	'username'=>'required|unique:temp_user',
    'firstname'=>'required|alpha|min:2',
    'lastname'=>'required|alpha|min:2',
    'email'=>'required|email|unique:temp_user',
    'password'=>'required|alpha_num|between:6,12|confirmed',
    'password_confirmation'=>'required|alpha_num|between:6,12'
    );
}

?>