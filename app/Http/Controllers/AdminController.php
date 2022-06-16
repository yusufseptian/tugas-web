<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    private $modelUser = null;
    private $queryUser = null;

    function __construct()
    {
        $this->modelUser = new User();
        $this->queryUser = DB::table('users');
        session_start();
    }

    function index()
    {
        $data = [
            "datauser" => $this->queryUser->select()->where("email", "=", $_SESSION['email'])->first()
        ];
        return view("t_admin", $data);
    }
}
