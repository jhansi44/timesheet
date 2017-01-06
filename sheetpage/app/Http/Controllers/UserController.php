<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
class UserController extends Controller
{
    public function index(){
   /* $users=User::all();
    	return $users;*/
    /*	$users = DB::table('users')->get();
        return view('index', ['User' => $users]);*/
      /* $users=User::all();-->table
    	return view('index',compact('users'));*/
   	$users = DB::table('users')->Paginate(5);

    return view('index', ['users' => $users]);

       /* $users = DB::table('users')->select()->get();
        return $users;*/
      /* return'get all users';*/

    }
 /*public function Dashbord(){
      return view('Admin/Dashbord');
    }
     
   public function tablesDashbord(){

       return view('Admin/tables');

     } */

 public function dashbord()
    {
      return view('Admin.dashbord');
    }

    public function users()
    {
      return view('Admin.users');
    }



}
