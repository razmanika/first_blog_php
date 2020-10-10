<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function loginCon(){
        $login = new Login(); // ლოგინის მოდულისთვის იქმნება ობიექტი
        return $login->loginMod('Nikoloz','Razmadze'); // ვიძახებთ მეთოდს და გადავცემთ შესაბამის ცვლადების ინფოს


    }
}
