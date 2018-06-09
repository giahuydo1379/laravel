
<?php


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
 
class Register extends Controller
{
    public function create()
    {
        return view('register');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
          
            'password' => 'required'
        ]);
        
        $user = User::create(request(['name', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/login');
    }
}