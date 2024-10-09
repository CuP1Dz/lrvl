<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller{

    public function index(){
    $reports_fill = DB::table('reports')->paginate(10);

    return view('reports.fill', ['reports' => $reports_fill]);

    $reports = Report::all();
    return view('reports.index', compact('reports'));
    }
}

