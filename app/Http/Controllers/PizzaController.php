<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
    //     $pizzas=[
    //     ['type' => 'hawaiian', 'base' => 'cheesy crust'],
    //     ['type' => 'volcano', 'base' => 'garlic crust'],
    //     ['type' => 'veg supreme', 'base' => 'thin & crispy']
    //  ];

    $pizzas=Pizza::all();

    return view('pizzas.index', [
        'pizzas'=>$pizzas,
        'name'=>request('name'),
        'age'=> request('age')
    ]);
    
}

    public function show($id){
        $pizza=Pizza::findorfail($id);
        return view('pizzas.show', ['pizza'=>$pizza]);
    }
    public function create(){
        return view('pizzas.create');
    }

    public function store(){
       $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = 10;

        $pizza->save();

        return redirect('/')->with('mssg', 'Thanks for your order!');
    }
}
