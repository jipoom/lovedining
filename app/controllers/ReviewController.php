<?php

class ReviewController extends BaseController{
				
	protected $layout = 'layout';
	
	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	}
	public function detailAction($review_id) {
		 $review = Review::find($review_id);					 
		 echo $review->review_title;
		 //redirect to detail.blade.php to display detail of this review
    }
	public function uploadAction() {
		return Redirect::to( (string)$url );
    }
		
}
?>