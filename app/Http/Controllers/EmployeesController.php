<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('employees.index', [
            'employees' => $employees,
        ]);
    }

    public function create() {
        return view('employees.create');
    }

    public function store(Request $request, Employee $employee) {
        $employee->employee_name = $request->name;
        $employee->section = $request->section;
        $employee->salary = $request->salary;
        $employee->created_at = Carbon::now();
        $employee->updated_at = Carbon::now();
        $employee->save();

        return view('employees.store');
    }

    public function search(Request $request, Employee $employee) {
        if (empty($request->employee_name_like)) {
            $employees = Employee::all();
        } else {
            $employees = Employee::where('employee_name', 'LIKE', '%'.$request->employee_name_like.'%')->get();
        }
        return view('employees.search', [
            'employees' => $employees,
        ]);
    }
}
