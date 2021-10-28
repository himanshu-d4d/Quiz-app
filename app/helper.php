<?php

function loginUser(){
    $user = Auth::user();
    return $user;
}

function answerscore(){
       // dd('hii');       
    $data = Session::all();
    $question8=[];
    $question9=[];
    $question10 = [];
    foreach($data['total'] as $value){
        
        if($value['question_no'] == "9"){
            $question9= $value;
           
        }
        if($value['question_no'] == "10"){
            $question10= $value;
           
        }
        if($value['question_no'] == "8"){
            $question8= $value;
           
        }
       
    }
    //dd($question10);
     $questionSum =  ($question9['answer_order'] + $question10['answer_order']);

     $colorArray = ["2,1"=>"Green_List","2,2"=>"Green_list","2,3"=>"Orange_list","2,4"=>"Yellow_list","3,1"=>"Green_list","3,2"=>"Orange_list","3,3"=>"Yellow_list","3,4"=>"Yellow_list",
    "4,1"=>"Orange_list","4,2"=>"Orange_list","4,3"=>"Yellow_list","4,4"=>"Blue_list","5,1"=>"Orange_list","5,2"=>"Yellow_list","5,3"=>"Blue_list","5,4"=>"Blue_list","6,1"=>"Yellow_list",
"6,2"=>"Yellow_list","6,3"=>"Blue_list","6,4"=>"Gray_list"];

     if($data = $questionSum.','.$question8['answer_order']){
         //dd($data);
        $colorArray[$data];
        //dd($colorArray[$data]);
        Session::push('answerScoreList',["color_list"=>$colorArray[$data]]);
     }
     $data = Session::all();
     $allData = $data['answerScoreList'];
     return $allData;
     session()->forget('total');      
   
    
}