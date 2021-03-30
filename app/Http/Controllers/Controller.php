<?php

namespace App\Http\Controllers;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Auth;
use DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
        $username=$req->input('username');
        $email=$req->input('email');
        $message=$req->input('message');
        $data= array('username'=>$username,'email'=>$email,'message'=> $message);

        DB::table('contactus')->insert($data);

        echo "Success";
    }
}
