<?php

class CommentController extends BaseController{
				
	protected $layout = 'layout';
	
	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	}
	public function commentAction() {	
		$validator = Validator::make(Input::all(), Comment::$rules);
	 	if ($validator->passes()) {
		 	$comment = new Comment;
			$comment->review_id = Input::get('review_id');
			$comment->content = Input::get('content');
			$comment->user_id = Auth::user()->id;
			$comment->rating = Input::get('rating');
			if($comment->save())
			{
				return Redirect::to('restaurants/review/'.Input::get('review_id'));
			}
		}
		else {
			return Redirect::to('restaurants/review/'.Input::get('review_id'))->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}
		//redirect to detail.blade.php to display detail of this review
		return Redirect::to('restaurants/review/'.Input::get('review_id'))
		->with('message','There is error occur while inserting your comment, please try again');;
    }
		
}
?>