<?php

namespace App\Http\Controllers;
use App\model\Institute;
use App\model\Package;
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
        return view('admin/institute_list',compact('inst','pack'));
    }

    public function store(Request $request)
    {
            Institute::create([
                'name' => $request->name,
                'mobile'=> $request->mobile,
                'person'=> $request->person,
                'email'=> $request->email,
                'password'=> app('hash')->make($request->password),
                'password_dummy'=> $request->password,
                'gst'=> $request->gst,
                'address'=> $request->address,
                'package'=> $request->package,
              ]);
              return response()->json(['message'=>'Successfully Save'],200);
        
    }
    public function update(Request $request)
    {
        $inst = Institute::find($request->id);
        $inst->update($request->all());
        return response()->json(['message'=>'Successfully Update'],200);
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
