<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Méthode register 
    public function register (Request $request){

    }

    //Méthode login
    public function login(Request $request){

        try{
            $input = $request->all();
        dd($input);
        $validator = Validator::make($input,[
            "email"=>"required|email",
            "password"=>"required",
        ]
        );
        if($validator->fails()){
            return response()->json([
                "status"=>false,
                "message"=>"Erreur de validation",
                "errors"=>$validator->errors(),
            ],422,);
        }

        }catch(\Throwable $th){
            return response()->json([
                "status"=>false,
                "message"=>$th->getmessage(),
            ],500,);
        }

        
        
    }
}
