<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller{

    public function index(){
        $report = Report::paginate(10);
        dd($report);
        return view('report.index', ['report' => $report]);
    }
    
        // $report = Report::all();
        // return view('report.index', compact('report'));
        // }
}

