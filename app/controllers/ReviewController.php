<?php

class ReviewController extends BaseController{
				
	protected $layout = 'layout';
	
	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	}
	public function detailAction() {		
		 
		 
    }
	public function uploadAction() {
		return Redirect::to( (string)$url );
    }
		
}
?>