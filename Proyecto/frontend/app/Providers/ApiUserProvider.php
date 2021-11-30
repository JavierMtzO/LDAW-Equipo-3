<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\UserProvider;

//Importar la clase del modelo de usuario
use App\Models\UserApi;

//Interfaz Authenticatable para los métodos que reciben una instancia del usuario
use Illuminate\Contracts\Auth\Authenticatable;

//Cliente HTTP
use Illuminate\Support\Facades\Http;


class ApiUserProvider implements UserProvider {

    
    public function retrieveById($token){

        $response = Http::timeout(5)->withHeaders([
            "Accept" => "application/json",
            //"Authorization" => "Bearer $token"
        ])
        ->withToken($token)
        ->get(env("API_URL") . '/user');

        if($response->ok()){

            $data = $response->json();

            $user = new UserApi();
            $user->token = $token;
            $user->id = $data["id"];
            $user->name = $data["firstname"];
            $user->lastname = $data["lastname"];
            $user->email = $data["email"];
            $user->role = $data["role"];
            $user->privileges = $data["privileges"];

            return $user;

        }

        return null;

    }

    public function retrieveByToken($identifier, $token){}

    public function updateRememberToken(Authenticatable $user, $token){}

    public function retrieveByCredentials(array $credentials){

        $response = Http::timeout(5)->withHeaders([
            "Accept" => "application/json",
            //"Authorization" => "Bearer $token"
        ])
        ->post(
            env("API_URL") . '/login',
            [
                "email" => $credentials["email"],
                "password" => $credentials["password"],
                "device_name" => "browser"
            ]
        );

        if($response->ok()){

            $data = $response->json();
            $token = $data["token"];

            $user = $this->retrieveById($token);

            return $user;

        }

        return null;

    }

    public function validateCredentials(Authenticatable $user, array $credentials){

        return !empty($user->token);

    }
    
}