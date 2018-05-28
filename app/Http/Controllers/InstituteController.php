<?php

namespace App\Http\Controllers;
use App\Institute;
use App\Package;
//use App\Institute;
use Illuminate\Http\Request;

class InstituteController extends Controller
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
        $inst =  Institute::all(); 
        $pack = Package::where('status',0)->get();
        return $pack;
    }

    public function store(Request $request)
    {
        if(!$request->id){
            
            Institute::create([
                'name' => $request->name,
                'mobile'=> $request->mobile,
                'person'=> $request->person,
                'email'=> $request->email,
                'password'=> $request->password,
                'gst'=> $request->gst,
                'address'=> $request->address,
                'package'=> $request->package,
              ]);
              return response()->json(['message'=>'Successfully Save'],200);
        }else{
            $inst = Institute::find($request->id);
       $inst->update($request->all());
              return response()->json(['message'=>'Successfully Update'],200);
        }
    }
    public function edit($id)
    {
        $inst = Institute::findOrFail($id);
        return response()->json($inst);
    }
    // public function deleteData($id)
    // {
    //     return "hi";
       
    // }
    
}
