<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Pagos_pisami;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('pagos',function(){
    return Pagos_pisami::all();
});

Route::get('pagos/{id}',function($id){
    return Pagos_pisami::find($id);
});

Route::post('pagos',function(Request $request){
    return Pagos_pisami::create($request->all());
});

Route::put('pagos/{id}',function(Request $request, $id){
    $pagos_pisami=Pagos_pisami::findOrFail($id);
    $pagos_pisami->update($request->all());
     return $pagos_pisami;
});

Route::delete('pagos/{id}',function($id){
    Pagos_pisami::find($id)->delete();
    return 204;
});
