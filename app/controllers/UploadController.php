<?php 

class UploadController extends BaseController
{
	public function uploadAction(){
		/*$ds          = DIRECTORY_SEPARATOR;  //1
		$storeFolder = public_path().'/uploads/';   //2
 
		if (!empty($_FILES)) {
	     
		    $tempFile = $_FILES['file']['tmp_name'];          //3             
		      
		    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
		     
		    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
		 
		    move_uploaded_file($tempFile,$targetFile); //6		    

	     
		}
		
			
		/*if (Input::hasFile('file')) {
	        $file            = Input::file('file');
	        $destinationPath = public_path().'/uploads/';
	        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
	        $uploadSuccess   = $file->move($destinationPath, $filename);
	    }*/
	    
	    
	    $input = Input::all();
		  $rules = array(
		      'file' => 'image|max:3000',
		  );
		 
		  $validation = Validator::make($input, $rules);
		 
		  if ($validation->fails())
		  {
		    return Response::make($validation->errors->first(), 400);
		  }

			$file = Input::file('file');
 
$destinationPath = 'uploads';
// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
$filename = str_random(12);
//$filename = $file->getClientOriginalName();
//$extension =$file->getClientOriginalExtension(); 
$upload_success = Input::file('file')->move($destinationPath, $filename);
 
if( $upload_success ) {
   return Response::json('success', 200);
} else {
   return Response::json('error', 400);
}
	}
}
?>