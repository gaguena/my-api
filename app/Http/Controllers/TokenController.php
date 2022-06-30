<?php

namespace App\Http\Controllers;

use App\Models\Token;

class TokenController  extends Controller
{
    public function __construct()
    {    
    }

    public function get($token) {
        $val = Token::where('val', $token)->get();
        return $val;
    }
}
