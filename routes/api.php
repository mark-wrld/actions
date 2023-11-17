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

Route::get('/test/{num}', function ($num) {
    if (!is_numeric($num)) {
        return response()->json(['message' => 'Number is not numeric'], 422);
    }
    $isOdd = $num % 2 != 0;
    return response()->json(['message' => $isOdd ? 'Number is odd' : 'Number is even'], 200);
});
