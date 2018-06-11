<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\model\Extitle;
use App\model\Language;
use App\model\Subject;
use App\model\Chapter;

class SubjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
        public function index($id)
        {
            //$id = Request::segment(1);
            $exid = Extitle::find($id);
            $exlg = Language::find($exid->language_id);
            $subject = Subject::where('active','0')->where('exam_id',$id)->get();
             $ids = Subject::where('active','0')->where('exam_id', $id)->pluck('id')->all();
             $chapter = Chapter::where('active','0')->whereIn('sub_id', $ids)->get();
            //$chapter = Chapter::where('active','0')->get();
            return view('admin/unit',compact('exid','exlg','subject','chapter'));
        }
        public function subjectSelect()
        {
            $subject = Subject::where('active','0')->where('status','0')->get();
            $table ='';
            foreach ($subject as $row) {
               $table .='<option value='.$row->id.'>'.$row->name.'</option>';
            }
             return $table;
        }
        public function subStore(Request $request)
         {
            Subject::create([
                   'name' => $request->name,
                   'exam_id'=> $request->exam_id,
                   'status' => $request->status,
              ]);
              return response()->json(['message'=>'Successfully Save'],200);    
         }
        public function chapStore(Request $request)
         {
            Chapter::create([
                   'name' => $request->name,
                   'sub_id'=> $request->sub_id
              ]);
              return response()->json(['message'=>'Successfully Save'],200);    
         }
         public function subEdit($id)
         {
            $subject =  Subject::findOrFail($id); 
            return response()->json($subject);
         }
         
         public function chapEdit($id)
         {
            $chapter =  Chapter::findOrFail($id); 
            return response()->json($chapter);

         }
         public function subUpdate(Request $request ,$id)
        {
            $subject = Subject::find($id);
            $subject->update($request->all());
            return response()->json(['message'=>'Successfully Update'],200);
       }

         public function chapUpdate(Request $request ,$id)
        {
            $chapter = Chapter::find($id);
            $chapter->update($request->all());
            return response()->json(['message'=>'Successfully Update'],200);
       }
       public function subDelete(Request $request)
        {
            $subject = Subject::find($request->id);
            $subject->update(['active' => 1,]);
            return response()->json(['message'=>'Successfully Delete'],200);
         }
       public function chapDelete(Request $request)
        {
            $chapter = Chapter::find($request->id);
            $chapter->update(['active' => 1,]);
            return response()->json(['message'=>'Successfully Delete'],200);
         }
    

    //
}
