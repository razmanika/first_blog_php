<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    public $name;
    public $lastname;


    public function loginMod($name, $lastname){ // ლოგინ კონტროლერიდან მოდის ცვლადებში ინფო
        $this->lastname = $lastname; // მივუთითეთ ცვლადი
        $this->name = $name; //


        return "{$name} {$lastname}"; // სტრინგში ჩავწერეთ ცვლადის მნიშვნელობები პითონში როგორც format.
    }
}
