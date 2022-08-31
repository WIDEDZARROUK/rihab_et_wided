<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Livreur;

class AuthApiController extends Controller
{
    public function login(Request $request)
    {
         $user = Livreur::where('nom', $request['name'])->where('password', $request['password'])->get();
         return $user;
    }
}
