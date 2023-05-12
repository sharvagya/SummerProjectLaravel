<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;
use App\Models\Employee;
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
    $salary->name = $employee->first_name . ' ' . $employee->last_name;
    $salary->status = $request->input('status');
    $salary->amount = $request->input('amount');
    $salary->save();
    return redirect()->route('salary.index');
}

public function edit($id)
{
    $salary = Salary::find($id);
    $employees = Employee::all();
    return view('editsalary', compact('salary', 'employees'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'status' => 'required',
        'amount' => 'required|numeric',
    ]);

    $salary = Salary::findOrFail($id);
    $salary->status = $request->input('status');
    $salary->amount = $request->input('amount');

    if ($request->has('date')) {
        $salary->date = $request->input('date');
    }

    // Retrieve the employee associated with the salary record
    $employee = Employee::findOrFail($salary->employee_id);

    // Set the name attribute of the salary record
    $salary->name = $employee->first_name . ' ' . $employee->last_name;

    $salary->save();

    return redirect()->route('salary')->with('success', 'Salary record updated successfully.');
}



public function destroy($id)
{
    $salary = Salary::find($id);
    $salary->delete();
    return redirect()->route('salary');
}


}
