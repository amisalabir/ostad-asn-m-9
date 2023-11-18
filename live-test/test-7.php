<?php
########## Task 1: ###########

#php artisan make:controller AboutController

#########Controller:#########



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    function index($name= "About"){
        return "This is index for About.";
    }
}


######Route:#########



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;

Route::get('/about/{name?}',[AboutController::class,'index']);


########## Task 2: ###########

# php artisan make:controller UserController

#########Controller:#########


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

   function login($email="",$password="")
    {
        $userEmail = "username@domain.com";
        $userPassword = "UserPassword";
        if($email == $userEmail &&  $password == $userPassword)
        {
            return "Login successful !";
        }
        else
        {
            return "'Invalid credentials !";
        }
    }
}


######Route:#########



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;

Route::get('/login/{email?}/{password?}',[UserController::class,'login']);