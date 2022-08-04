<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('register',function (){
$user=\App\Models\User::create([
    'name'=>'ll',
    'email'=>'gg@gmail.com',
    'password'=>bcrypt('123456')
]);
$token=$user->createToken('mytoken')->plainTextToken;
$response=[
    'user'=>$user,
    'token'=>$token
];

return response($response,200);

});

Route::group(['middleware' => ['auth:api']], function () {

    Route::get('test', function () {

        return response()->json();
    });
});
