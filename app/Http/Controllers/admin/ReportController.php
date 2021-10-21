<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Report;

class ReportController extends Controller
{
    public function report(){
        $reports = Report::paginate(5);
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
}    
