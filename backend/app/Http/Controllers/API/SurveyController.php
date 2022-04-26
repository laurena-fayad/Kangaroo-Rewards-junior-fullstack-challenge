<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function displaySurveys(){

        $surveys = [];
        for ($i = 1; $i<16; $i++){
            $survey = json_decode(file_get_contents(storage_path() . "/data/".$i.".json"), true);
            if(!in_array($survey['survey'], $surveys)){
                array_push($surveys, $survey['survey']);
            }
        }
        return json_encode($surveys);
    }
}


