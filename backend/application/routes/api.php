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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/stocks', function () {
    return [
        [
            'sku' => 'RORAFOOTREST01',
            'qty' => 10,
        ],
        [
            'sku' => 'RORAFOOTREST02',
            'qty' => 5,
        ],
        [
            'sku' => 'RORAFOOTREST03',
            'qty' => 4,
        ],
        [
            'sku' => 'RORAFOOTREST04',
            'qty' => 3,
        ],
        [
            'sku' => 'RORAFOOTREST05',
        ],
    ];
});
