<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PubController extends Controller
{
public function getDrinks(){
    $drinks = DB::table("drinks")->get();

    return $drinks;
}
public function getDrinkNames(){
    $names = DB::table("drinks")->select("name")->get();

    return $names;
}
public function getDrinkNameAlias(){
    $names = DB::table("drinks")->select("name as Név")->get();

    return $names;
}
public function getSelectedDrink(){
    $drink = DB::table("drinks")->where("amount",30)->get();

    return $drink;
}
public function getSelectDrinkers(){
    $drinkers = DB::table("drinks")->where("amount","<=",30)->get();
   return $drinkers;
}
public function getConcrateDrink(){
    $drink = DB::table("drinks")->select("name as Név","amount as Mennyiség")->find(4);
   return $drink;
}
public function getKaDrinks(){
    $drinks = DB::table("drinks")->where("name", "like", "%ka%")->get();
    return $drinks;
}
public function getMoreValue(){
    $drink = DB::table("drinks")->where("type_id",2)->where("amount","<=",30)->get();
    return $drink;
}
public function getAmountRange(){
    $drinks = DB::table("drinks")->whereBetween("amount",[0,30])->get();
    return $drinks ;
}
public function addDrink() {

    DB::table("drinks")->insert([
        "name"=>"Coca cola",
        "amount"=>100,
        "type_id" =>4,
        "quantity_id" =>1
    ]);
    return "OK";
}
public function getLastDrinkId(){

    $lastId = DB::table("drinks")->insertGetId([
        "name"=>"Coca cola",
        "amount"=>100,
        "type_id" =>4,
        "quantity_id" =>1
    ]);
    return $lastId;
}
public function addMoreDrinks(){
    DB::table("drinks")->insert([
        ["name"=>"Jameson",
        "amount"=>10,
        "type_id" =>3,
        "quantity_id" =>1],

["name"=>"Koccintós",
"amount"=>15,
"type_id" =>2,
"quantity_id" =>1]
]);
    
    return "OK";
}
public function updateDrink(){
    DB::table("drinks")->where("id",2)->update([
        "amount"=>93
    ]);
    return "ok";
}
public function deleteDrink(){
    DB::table("drinks")->where("id",12)->delete();
}
public function innerJoin(){
   $drinks = DB::table("drinks")->
    join("types","types.id", "=","drinks.type_id")->get();

    return $drinks;
}
public function leftJoin(){
 $drinks = DB::table("drinks")->
 leftJoin("types","drinks.type_id", "=","types.id")->get();

 return $drinks;
}
public function rightJoin(){
    $drinks = DB::table("drinks")->
    rightjoin("types","drinks.type_id", "=","types.id")->get();
   
    return $drinks;
   }
}
