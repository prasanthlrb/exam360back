<?php

namespace App\Http\Controllers;
use App\model\Package;
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
        $pack =  Package::all(); 
        return view('admin/package',compact('pack'));
    }

    public function store(Request $request)
    {
        if(!$request->id){
            
            Package::create([
                'name' => $request->name,
                'price'=> $request->price,
                'subscripe'=> $request->subscripe,
              ]);
              return response()->json(['message'=>'Successfully Save'],200);
        }else{
            $Package = Package::find($request->id);
       $Package->update($request->all());
              return response()->json(['message'=>'Successfully Update'],200);
        }
    }
    public function edit($id)
    {
        $pack = Package::findOrFail($id);
        return response()->json($pack);
    }
    public function deleteData($id)
    {
        $Package = Package::find($id);
        $Package->update(['status'=>1]);
        // if(Package::destory($id)){
        //     return response()->json(['status'=>'success','message'=>'Board Delete Successfully']);
        //   }else{
        //     return response()->json(['status'=>'error','message'=>'Some want wrong'],200);
        //   }
    }
    
}
