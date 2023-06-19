<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('person', function (Request $request) {
    return response()->json([
        'person' => [
            [
                'name' => 'John',
                'age'  => '25',
                'city' => 'Lviv',
            ],
        ]
    ]);
});

Route::get('person/{name}', function ($name) {
    $persons = [
        [
            'name' => 'John',
            'age'  => '25',
            'city' => 'Lviv',
        ],
        [
            'name' => 'Tom',
            'age'  => '35',
            'city' => 'Kyiv',
        ]
    ];
    foreach($persons as $key => $person){
        if($name == $person['name'] ){
            return response()->json([
                $persons[$key]
            ]);
        }
    }
    return "User $name not exists";
});
