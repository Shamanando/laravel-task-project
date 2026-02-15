<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('api-check', function () {
    return response()->json([
        'status' => 200,
        'message' => 'api is working'
    ]);
});


Route::get('payment-status', function () {
    return response()->json([
        'status' => 200,
        'message' => 'payment success',
        'data' => [
            'product' => 'product 1',
            'quantity' => 1,
            'amount' => 500,
            'payment' => [
                'currency' => 'bdt',
                'method' => 'c-card'
            ]
        ]
    ]);
});


Route::post('user-create', function (Request $request) {
    dd($request->all());
});
