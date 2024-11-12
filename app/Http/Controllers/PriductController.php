<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Priduct;
class PriductController extends Controller
{

    // public function __construct()
    // {
       
    //     $this->middleware('auth')->only(['create', 'store', 'edit', 'update', 'destroy']);
    // }

 
    public function index()
    {
        $products = Priduct::all();
        return view('product.index', compact('products'));
    }

  
    public function create()
    {
        return view('product.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);
        
        $product = new Priduct();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('product.index')->with('message', 'producto creado con exito');
    }


    public function show(Priduct $product)
    {
        return view('product.show', compact('product'));
    }

   
    public function edit(Priduct $product)
    {
        return view('product.edit', compact('product'));
    }

   
    public function update(Request $request, Priduct $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('product.index')->with('message', 'Se actualizo con exito el producto');
    }

 
    public function destroy(Priduct $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Se elimino con exito el producto');
    }
}
