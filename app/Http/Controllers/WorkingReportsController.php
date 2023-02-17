<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkingReport;
use App\Models\Employee;
use App\Http\Requests\WorkReportRequest;
use Carbon\Carbon;

class WorkingReportsController extends Controller
{
    public function index() {
        $reports = WorkingReport::all();
        return view('reports.index', [
            'reports' => $reports,
        ]);
    }

    public function create() {
        $employees = Employee::all();
        return view('reports.create', [
            'employees' => $employees,
        ]);
    }

    public function store(WorkReportRequest $request, WorkingReport $workingReport) {
        $workingReport->employee_id	= $request->employeeId;
        $workingReport->working_date = $request->date;
        $workingReport->working_hours = $request->time;
        $workingReport->summary	= $request->body;
        $workingReport->created_at	= Carbon::now();
        $workingReport->updated_at	= Carbon::now();
        $workingReport->save();
        return view('reports.store');
    }
}
