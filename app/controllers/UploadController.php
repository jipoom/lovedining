<?php 

class UploadController extends BaseController
{
	public function uploadAction(){
		$ds          = DIRECTORY_SEPARATOR;  //1
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

	}
}
?>