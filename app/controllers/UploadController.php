<?php 

class UploadController extends BaseController
{
	public function uploadAction(){
		$input = Input::all();

		$rules = array('image' => 'required|image');
		$messages = array();
		$validate = Validator::make($input, $rules, $messages);
		if ($validate->passes()) {

		   // Get the image input
		    $file = Input::file('image');
		
		 	$destinationPath = public_path().'/uploads/';
	        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
	        $uploadSuccess   = $file->move($destinationPath, $filename);
		
		   // This is were you would store the image path in a table
		
		   // You don't need the Redirect to make the image upload work it's just here for example only
		   return Redirect::back();
		} else {
		   return Redirect::back()->withErrors($validate)->withInput();
		}	

	}
}
?>