<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joinController extends Controller
{
    public function join(){
       $data = Db::table('users')
       ->join('products','users.id','products.user_id')
       ->select('users.name','products.proname')
       ->get();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
