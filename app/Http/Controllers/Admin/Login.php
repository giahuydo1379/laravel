<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Model\users2;


class Login extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function __construct() {
      // $this->middleware('auth');
    }
    public function getLogin() {
       return view('login');
    }
    public function logout(Request $request) {
        // Auth::logout();
        // return redirect('/login');
        return view('login');
      }

    public function getRegister() {
        return view('register');
     }
     

     public function postRegister(Request $request){
        $model = new users2();
        $data = $request;
		$model->add($data);
       
     }

     public function postLogin2(Request $request){
        $data = [
                  'username' => $request['username'],
                    
                    'password' => $request['password'],
                ];
          if(Auth::attempt($data)){
                return view('master');
            }
          else{
            echo 'Đăng nhập không thành công';
            return view('login');
        }
     }
    public function postLogin(Request $request) {
       // return $request->all();
        
        //return $pass;
        $username=$request->input('username');
        $password=$request->input('password');
        $checkingLogin=DB::table('users')->where(['username'=>$username, 'password'=>$password])->get();
            if(count($checkingLogin)>0){
                return view('master');
	
            }
            else{
                echo 'Đăng nhập không thành công';
                return view('login');
            }
      }

    public function getIndex() {
        return 'Đăng nhập thành công!';
    }
   
}
