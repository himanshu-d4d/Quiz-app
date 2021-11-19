<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Report;
use View;
use Session;
use Storage;



class ReportController extends Controller
{
    public function report(){
        $reports = Report::orderBy('id')->paginate(10);
        //dd($reports);
        return view('admin.report.report')->with(compact('reports'));
    }

    public function downloadPdf($filename){
        $path = storage_path('pdf');
        if(!file_exists(''.$path.'/'.$filename.'.pdf')){
            die('file not found');
        }else {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$filename");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: binary");
        
            // read the file from disk
            readfile(''.$path.'/'.$filename.'.pdf');
        }
    }
    public function downloadDocx(Request $request, $id){
        $data = Report::find($id);
        $allData = json_decode($data['answer_data'],true);
        //dd($allData);
        $view_content = View::make('report_one', ['allData' => $allData])->render();
        $headers = array(
            "Content-type"=>"text/html",
            "Content-Disposition"=>"attachment;Filename=myfile.doc"
        );
        
        $content = $view_content;
        
        return \Response::make($content,200, $headers);
    }
    public function downloadODText(Request $request, $id){
        $data = Report::find($id);
        $allData = json_decode($data['answer_data'],true);
        //dd($allData);
        $view_content = View::make('report_one', ['allData' => $allData])->render();
        $headers = array(
            "Content-type"=>"text/html",
            "Content-Disposition"=>"attachment;Filename=myfile.odt"
        );
        
        $content = $view_content;
        
        return \Response::make($content,200, $headers);
    }
}    
