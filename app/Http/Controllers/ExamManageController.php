<?php

namespace App\Http\Controllers;
use App\model\Unit;
//use App\Package;
use App\model\Extitle;
use App\model\Language;
use Illuminate\Http\Request;

class ExamManageController extends Controller
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
    // public function index()
    // {
    //     $pack =  Extitle::all(); 
    //     return view('admin/package',compact('pack'));
    // }
        #Exam Title

         public function titleView()
         {
            $title =  Extitle::where('active','0')->get(); 
            $language =  Language::where('active','0')->get(); 
            return view('admin/title',compact('title','language'));
         }
         public function titleEdit($id)
         {
            $title =  Extitle::findOrFail($id); 
            return response()->json($title);
         }
          public function titleStore(Request $request)
         {
               Extitle::create([
                'title' => $request->title,
                'status' => $request->status,
                'language_id'=> $request->language_id,
              ]);
              return response()->json(['message'=>'Successfully Save'],200);    
         }
         public function titlehide(Request $request)
        {
            $title = Extitle::find($request->id);
            $title->update(['active' => 1,]);
            return response()->json(['message'=>'Successfully Delete'],200);
         }
         public function titleUpdate(Request $request ,$id)
        {
            $title = Extitle::find($id);
            $title->update($request->all());
            return response()->json(['message'=>'Successfully Update'],200);
       }


        #Language

        public function lanView()
        {
            $lan =  Language::select('name','id')->where('status','0')->get(); 
            $table ='';
            foreach ($lan as $row) {
               $table .='<option value='.$row->id.'>'.$row->name.'</option>';
            }
             return $table;
        }
        public function lanEdit($id)
        {
            $lan =  Language::findOrFail($id); 
            return response()->json($lan);
        }
        public function lanStore(Request $request)
        {
            Language::create([
            'name' => $request->name,
            'status' => $request->status
            ]);
            return response()->json(['message'=>'Successfully Save'],200);    
        }
        public function lanhide(Request $request)
        {
            $lan = Language::find($request->id);
            $lan->update(['active' => 1,]);
            return response()->json(['message'=>'Successfully Delete'],200);
        }
        public function lanUpdate(Request $request ,$id)
        {
        $lan = Language::find($id);
            $lan->update($request->all());
            return response()->json(['message'=>'Successfully Update'],200);
        }

        #Unit

        public function UnitView()
        {
            $Unit =  Unit::all(); 
            return $Unit;
        }
        public function UnitEdit($id)
        {
            $Unit =  Unit::findOrFail($id); 
            return $Unit;
        }
        public function UnitStore(Request $request)
        {
            Unit::create([
            'unit' => $request->unit,
            'user_id' => $request->user_id,
            'sub_id' => $request->sub_id
            ]);
            return response()->json(['message'=>'Successfully Save'],200);    
        }
        public function Unithide(Request $request)
        {
            $Unit = Unit::find($request->id);
            $Unit->update(['status' => 1,]);
            return response()->json(['message'=>'Successfully Delete'],200);
        }
        public function UnitUpdate(Request $request)
        {
        $Unit = Unit::find($request->id);
            $Unit->update($request->all());
            return response()->json(['message'=>'Successfully Update'],200);
        }




    
    
}
