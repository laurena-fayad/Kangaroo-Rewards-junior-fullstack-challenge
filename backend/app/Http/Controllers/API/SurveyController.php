<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function displaySurveys(){

        $surveys = json_decode(file_get_contents(storage_path() . "/data/1.json"), true);

        return response()->json([
            $surveys['survey']
        ]);
    }
}


