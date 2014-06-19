<?php

class ReviewController extends BaseController{
				
	protected $layout = 'layout';
	
	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	}
	public function detailAction($review_id) {	
		$review = Review::find($review_id);			 
		$comment = Comment::where('review_id', '=', $review_id)->get();
		//redirect to detail.blade.php to display detail of this review
		return View::make('review/detail')->with('detail', $review)->with('comments', $comment);
    }
	public function uploadAction() {
		return Redirect::to( (string)$url );
    }
	
	public function newAction() {
		$init_cat = Category::first();
		$array = array($init_cat->id => $init_cat->category_name);
		$categories = Category::all();
		foreach($categories as $temp)
		{
				
			$array = array_add($array, $temp->id, $temp->category_name);
		}
		
    	return View::make('review/new')->with('allCategories', $array);
    }	
		
}
?>