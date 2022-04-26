<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;

class SurveyController extends Controller
{
    public function displaySurveys(){
        $all_files = File::files(storage_path('data'));
        $filecount = 0;
        
        if ($all_files !== false) {
            $filecount = count($all_files);
        }
        
        $surveys = [];
        for ($i = 1; $i<=$filecount; $i++){
            $survey = json_decode(file_get_contents(storage_path() . "/data/".$i.".json"), true);
            if(!in_array($survey['survey'], $surveys)){
                array_push($surveys, $survey['survey']);
            }
        }
        return json_encode($surveys);
    }
}


