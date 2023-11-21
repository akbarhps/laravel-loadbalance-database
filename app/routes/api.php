<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::post('/users', function () {
    for ($i = 0; $i <= 100; $i++) {
        User::factory()->create();
    }
});

Route::get('/users', function () {
    return DB::table("users")
        ->limit(10)
        ->orderBy(DB::raw("RAND()"))
        ->get()
        ->toArray();
});

Route::get('/user', function () {
    return DB::table("users")
        ->where('id', rand(1, 50000))
        ->get()
        ->toArray();
});
