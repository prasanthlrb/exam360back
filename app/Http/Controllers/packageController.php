<?php

namespace App\Http\Controllers;
use App\Package;
use Illuminate\Http\Request;

class packageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index()
    {
        return Package::all(); 
    }

    public function store(Request $request)
    {
        Package::create([
            'name' => $request->name,
            'price'=> $request->price,
            'subscripe'=> $request->subscripe,
          ]);
          return response()->json(['message'=>'success'],200);
    }

    
}
