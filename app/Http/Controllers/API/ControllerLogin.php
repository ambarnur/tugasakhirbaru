<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerLogin extends Controller
{
    public function Loginsaksi(Request $request){
        $this->validate($request, [
            $email = $request->input('email'),
            $password = $request->input('password')
            ]);
            $role = 20;

            $data = \App\User::where('email', $email)
            ->where('password', md5($password))->where('role',$role)->get();
    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
      $res['status'] = true;
      $res['code'] = 200;
      $res['message'] = "Success!";
        $res['data'] = $data;
        return response($res);
    }else{
        $res['status'] = false;
        $res['code'] = 400;
          $res['message'] = "no";
          return response($res);
      }
    }
}
