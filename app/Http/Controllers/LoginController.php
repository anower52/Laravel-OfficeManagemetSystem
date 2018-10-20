<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    /*public function posted(LoginRequest $request)
    {
        if($request->username == 'admin@gmail.com' && $request->password == '123456')
        {
            $request->session()->put('username', $request->username);
            return redirect()->route('home');
        }
//        return view(json_encode($request));
        else
        {
            $request->session()->flash('message','Invalid username or password');
            return redirect()->route('login');
        }
    }*/
    public function verify(LoginRequest $request)
    {
        $user = DB::table('users')
            ->where('username', $request->username)
            ->where('password',$request->password)
            ->first();
        if(!$user)
        {
            $request->session()->flash('message' , 'Invalid User Name or Password');
                return redirect()->route('login');
        }
        else
        {
            $request->session()->put('user' , $user);
            return redirect()->route('home');

        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }

    public function test(){
        $link = "http://www.blogger.com";
        $api_link = "https://graph.facebook.com/v2.2/?id={$link}";
        $responseData = file_get_contents($api_link);
//        echo $responseData;
        $arr = json_decode($responseData);
        echo "<pre>";
        print_r($arr);
        die();
    }

}
