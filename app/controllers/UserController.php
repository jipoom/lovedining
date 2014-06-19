<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class UserController extends BaseController{
				
	protected $layout = 'layout';
	
	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	}
	public function mainAction() {
        return View::make('user/main');
    }
	
	public function indexAction() {
        $user = Session::get('user');
        if (empty($user)) {
           return View::make('user/login');
        } else {
            return View::make('user/profile')->with('resuft',$user);
        }
    }
	public function loginAction(){
			
    	//$hashedPassword = Hash::make(Input::get('password'));
    	$user = array(
            'email' => Input::get('email'),
            'password' => Input::get('password'),
			//'active' => 1
        );
	  	if (Auth::attempt($user))
		{
			return Redirect::to('user/profile');
			//return View::make('user/profile');
		}
		else {
			return Redirect::to('user/login')
			        ->with('message', 'Your username/password combination was incorrect')
			        ->withInput();
			} 
	    /* $msg = array(
            'username.required' => 'username ไม่สามารถเป็นค่าว่างได้',
            'password.required' => 'password ไม่สามารถเป็นค่าว่างได้',
            'username.min' => 'username ต้องไม่ต่ำกว่า :min ตัวอักษร',
            'password.min' => 'password ต้องไม่ต่ำกว่า :min ตัวอักษร',
        );
        $rules = array(
            'username' => 'required|min:4',
            'password' => 'required|min:4'
        );
        if (Input::server("REQUEST_METHOD") == "POST"){
           $validator = Validator::make(Input::all(),$rules,$msg);
            if($validator->fails()){
                $messages = $validator->messages();
                return Redirect::to('user/login')->withErrors($messages)->withInput();
            }else{
              $username = Input::get('username');
              $password = Input::get('password');
              $users = User::where('username','=',$username)
                    ->where('password','=',$password)
                    ->count();
              if(empty($users)){
                $messages = array(
                   array('พบไม่ข้อมูลผู้ใช้งาน..กรุณาตรวจสอบข้อมูลใหม่ด้วยครับ...')
                );
                return Redirect::to('user/login')->withErrors($messages)->withInput();
              }else{
                $users = User::where('username','=',$username)
                    ->where('password','=',$password)
                    ->get();
                Session::put('user',$users);
                return Redirect::to('user/profile');
              }
            }
        }   */
    }
         
    public function profileAction(){
        if (Auth::check())
		{
		    // The user is logged in...
		     return View::make('user/profile');
		}
			 return View::make('user/login')->with('message','You have to login first!!');
       
    }	
	
	public function createAction(){
		$validator = Validator::make(Input::all(), User::$rules);
	    if ($validator->passes()) {
	        // validation has passed, save user in DB
			$key = md5(uniqid());
	        $user = new User;
		    $user->firstname = Input::get('firstname');
		    $user->lastname = Input::get('lastname');
		    $user->email = Input::get('email');
		    $user->password = Hash::make(Input::get('password'));
			$user->username = Input::get('username');
			$user->tel = Input::get('tel');
		    $user->salary = Input::get('salary');
		    $user->sex = Input::get('sex');
			$user->age = Input::get('age');
			//$user->activation_key = $key;
		    $user->save();
			//$data = array(
			//			'firstname'=>Input::get('firstname'), 
			//			'lastname'=>Input::get('lastname'), 
			//			'link' => HTML::linkRoute('user/activate', 'Click Here to activate your account', array($key,$user->username)));
			//
			//Mail::send('user.mail.activation', $data, function($message){
		    //    $message->to(Input::get('email'), Input::get('firstname').' '.Input::get('lastname'))->subject('Welcome to LoveDining');
		    //});
					
									
    		//return Redirect::to('user')->with('message', 'Thanks for registering! Please check your email address to activate your account');
			return Redirect::to('user')->with('message', 'Thanks for registering! ');
	    } else  {
	        // validation has failed, display error messages 
			return Redirect::to('/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}
	}

	public function activateAction($key,$username){
		//$user = User::where('activation_key', =, $key)->where('active', =, 0);
		
		$users = DB::table('temp_user')
                    ->where('activation_key', '=', $key)
                    ->where('active', '=', 0)
                    ->get();
		if($users)
		{
			foreach ($users as $user)
			{
			    $userFound = $user->username;
			}
			if($userFound == $username)
			{
				if(DB::table('temp_user')
		            ->where('username','=', $username)
		            ->update(array('active' => 1, 'activation_key' => '')))
		        {
		            return Redirect::to('user/login')->with('message', 'Thanks for activation! You can now login to LoveDining');		
		        }
			}
		}
		else
		{
			//Already activated
			return Redirect::to('user/login')->with('message', 'You already activated the account!');
		}
	}

	public function logoutAction(){
		Session::flush();
		return Redirect::to('user')->with('message','You have logged out!!');
		
	}
	
	public function fbLoginAction(){
      // get data from input
	    $code = Input::get( 'code' );
	
	    // get fb service
	    $fb = OAuth::consumer( 'Facebook' );
	
	    // check if code is valid
	
	    // if code is provided get user data and sign in
	    if ( !empty( $code ) ) {
	
	        // This was a callback request from facebook, get the token
	        $token = $fb->requestAccessToken( $code );
	
	        // Send a request with it
	        $result = json_decode( $fb->request( '/me' ), true );
	
	        $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
	        echo $message. "<br/>";
	
	        //Var_dump
	        //display whole array().
	        dd($result);
	
	    }
	    // if not ask for permission first
	    else {
	        // get fb authorization
	        $url = $fb->getAuthorizationUri();
	
	        // return to facebook login url
	        return Redirect::to( (string)$url );
	    }  
	}
}

?>