<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    public function index()
{
    $salaries = Salary::all();
    return view('salary', compact('salaries'));
}

public function create()
{
    $employees = Employee::all();
    return view('salary.create', compact('employees'));
}

public function store(Request $request)
{
    $salary = new Salary();
    $salary->date = $request->input('date');
    $salary->employee_name = $request->input('employee_name');
    $salary->status = $request->input('status');
    $salary->amount = $request->input('amount');
    $salary->save();
    return redirect()->route('salary.index');
}

public function edit($id)
{
    $salary = Salary::find($id);
    $employees = Employee::all();
    return view('salary.edit', compact('salary', 'employees'));
}

public function update(Request $request, $id)
{
    $salary = Salary::find($id);
    $salary->date = $request->input('date');
    $salary->employee_name = $request->input('employee_name');
    $salary->status = $request->input('status');
    $salary->amount = $request->input('amount');
    $salary->save();
    return redirect()->route('salary.index');
}

public function destroy($id)
{
    $salary = Salary::find($id);
    $salary->delete();
    return redirect()->route('salary.index');
}


}
