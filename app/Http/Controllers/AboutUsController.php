<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //Your controller code here
    public function index(Request $request){

        $test = new Test();
        return $test->getTest();
    }
}
