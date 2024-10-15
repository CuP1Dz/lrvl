<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller{

    public function index(){

        $reports = Report::all();
        return view('report.index', compact('reports'));

    }
    
        // $report = Report::all();
        // return view('report.index', compact('report'));
        // }
}

