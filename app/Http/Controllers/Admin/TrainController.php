<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Train;


class TrainController extends Controller
{
    public function index() {

            $trains = Train::all();
                
            return view('welcome', [
                'trains' => $trains
        
            ]);
        
            
        }
    }

