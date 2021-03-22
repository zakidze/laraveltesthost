<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{

  public function index()
  {
    // get data from a database
    $pizzas = Pizza::orderBy('name')->get();

    return view('pizzas.index', [
      'pizzas' => $pizzas,
    ]);
  }

  public function show($id)
  {
    $pizza = Pizza::findOrFail($id);
    // use the $id variable to query the db for a record
    return view('pizzas.show', ['pizza' => $pizza]);
  }

  public function create()
  {
    return view('pizzas.create');
  }
}
