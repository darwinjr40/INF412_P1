<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    public function login(Request $request){
        $e = ['Correo electronico no encontrado.','Contraseña incorrecta.'];
        $request->validate([
            'email' => 'required | string ',
            'password' => 'required | string | min:4'
        ]);

        /* if($request->name = '' || $request->password == '')
            return response()->json(['message' => 'These credentials do not match our records.'], 404); */

        if(!DB::table('users')->where('email', $request->email)->exists()){
            return response()->json(['message' => $e[0]], 404);
        }

        $user = User::where('email', $request->email)->firstOrFail();
        if(Hash::check($request->password, $user->password)){
            return $user;
        }else{
            return response()->json(['message' => $e[1]], 404);
        }
    }
}
