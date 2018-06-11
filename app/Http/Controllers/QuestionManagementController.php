<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\model\Chapter;
use App\model\Question;

class QuestionManagementController extends Controller
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
    public function index($id)
    {
        $title = Chapter::find($id);
        return view('admin/questionList',compact('title'));
    }
    public function addQuestion($id)
    {

       
        return view('admin/question',compact('id'));
    }
    public function saveQuestion(Request $request)
    {
      
        $detail=$request->question;

		$dom = new \domdocument();
		$dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

		$images = $dom->getelementsbytagname('img');

		foreach($images as $k => $img){
			$data = $img->getattribute('src');

			list($type, $data) = explode(';', $data);
			list(, $data)      = explode(',', $data);

			$data = base64_decode($data);
			$image_name= time().$k.'.png';
			$path = public_path() .'/'. $image_name;

			file_put_contents($path, $data);

			$img->removeattribute('src');
			$img->setattribute('src', $image_name);
		}

		$detail = $dom->savehtml();
		$question = new Question;
		$question->question = $detail;
		$question->chapter_id = 10;
		$question->save();
        	return "Store Successfully";
    }

    //
}
