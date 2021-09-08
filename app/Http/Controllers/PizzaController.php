<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Support\Str;

class PizzaController extends Controller
{
    //public function __construct(){
   //     $this->middleware('auth');
    //}

    public function index() {

        $pizzas =  Pizza::all();
      // $pizzas = Pizza::orderBy('name')->get();
      // $pizzas = Pizza::where('type', 'hawaiian')->get();
      // $pizzas = Pizza::latest()->get()

        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }
    public function show($id){

        $pizza = Pizza::findOrfail($id);

        return view('pizzas.show',['pizza' => $pizza ]);
    }

    public function u_show($id){

        $pizza = Pizza::findOrfail($id);

        return view('pizzas.u_show',['pizza' => $pizza ]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {
        $pizza = new Pizza();
        $pizza->user_id = request('user_id');
        $pizza->user = request('user');
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();
        
        return redirect('/pizzas/check')->with('mssg', 'Thanks for your Order');
    }

    public function check(){
        $user = auth()->user();
        $orders = Pizza::where('user_id', $user->id)->get();

        return view('pizzas.check', compact('user', 'orders'));
    }

    public function destroy($id){
        $pizza = Pizza::findOrfail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
