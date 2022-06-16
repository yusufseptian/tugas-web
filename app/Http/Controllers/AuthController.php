<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    private $modelUser = null;
    private $queryUser = null;
    /**
     * Store a new flight in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->modelUser = new User();
        $this->queryUser = DB::table('users');
        session_start();
    }

    function login()
    {
        $data = [
            "title" => "Login",
            "childForm" => "formLogin",
            "url" => "login"
        ];
        if (isset($_SESSION['logBan'])) {
            $data['logBan'] = true;
            unset($_SESSION['logBan']);
        }
        return view("login", $data);
    }

    function register()
    {
        $data = [
            "title" => "Register",
            "childForm" => "formRegist",
            "url" => "saveUser"
        ];
        if (isset($_SESSION['regist'])) {
            $data['input'] = true;
            unset($_SESSION['regist']);
        }
        return view("login", $data);
    }

    function saveRegister(Request $request)
    {
        $this->modelUser->name = $request->txtNama;
        $this->modelUser->email = $request->txtEmail;
        $this->modelUser->password = bcrypt($request->txtPassword);
        $this->modelUser->save();
        $_SESSION['regist'] = true;
        return redirect('/register');
    }

    function tryLogin(Request $request)
    {
        $auth = Auth::attempt([
            "email" => $request->txtEmail,
            "password" => $request->txtPassword
        ]);
        if ($auth) {
            $_SESSION['email'] = $request->txtEmail;
            return redirect("/admin");
        } else {
            $_SESSION['logBan'] = true;
            return redirect('/');
        }
    }
}
