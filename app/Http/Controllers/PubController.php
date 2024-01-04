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
}
