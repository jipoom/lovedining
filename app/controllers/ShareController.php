<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class ShareController extends BaseController{
				
	protected $layout = 'layout';
	
	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	}
	public function twitterAction() {
		$url = Share::load('http://www.example.com', 'My example')->twitter();
		return Redirect::to( (string)$url );
    }
	public function facebookAction() {
		$url = Share::load('http://www.example.com', 'My example')->facebook();
		return Redirect::to( (string)$url );
    }
		
}

?>