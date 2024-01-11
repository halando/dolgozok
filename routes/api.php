<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubController;
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

Route::get("/drinks",[PubController::class, "getDrinks"]);
Route::get("/names",[PubController::class, "getDrinkNames"]);
Route::get("/names",[PubController::class, "getDrinkNameAlias"]);
Route::get("/drink",[PubController::class, "getSelectedDrink"]);
Route::get("/drinkers",[PubController::class, "getSelectDrinkers"]);
Route::get("/drink",[PubController::class, "getConcrateDrink"]);
Route::get("/drinks",[PubController::class, "getKaDrinks"]);
Route::get("/drink",[PubController::class, "getMoreValue"]);
Route::get("/drinks",[PubController::class, "getAmountRange"]);
Route::post("/adddrink",[PubController::class,"addDrink"]);
Route::post("/lastid",[PubController::class,"GetLastDrinkId"]);
Route::post("/moredrinks",[PubController::class,"addMoreDrinks"]);
Route::put("/updatedrink",[PubController::class,"updateDrink"]);
Route::delete("/deletedrink",[PubController::class,"deleteDrink"]);
Route::get("/inner",[PubController::class, "innerJoin"]);
Route::get("/left",[PubController::class,"leftJoin"]);
Route::get("/right",[PubController::class,"rightJoin"]);