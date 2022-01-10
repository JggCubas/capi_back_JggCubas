<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show(){
      // $users = DB::table('users')->get();
      $sql = "select u.name,ud.domicilio,u.fecha_nacimento,TIMESTAMPDIFF(YEAR,u.fecha_nacimento ,CURDATE()) as edad from Laravel_capi.users u
            join Laravel_capi.user_domicilios ud on ud.user_id = u.id ";
      $products = DB::select($sql);
      return $products;
    }
}
