<?php

namespace App\Http\Controllers;
use App\Models\Users;
use DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
       
        $datos['users']=Users::paginate(5);
        return view('admin.index',$datos);
    }
}
