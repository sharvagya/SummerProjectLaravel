<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
public function showEmployeeForm()
{
    return view('addemployee');
}
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'first-name' => 'required',
        //     'last-name' => 'required',
        //     'gender' => 'required',
        //     'date-of-birth' => 'required|date',
        //     'phone-number' => 'required',
        //     'working-title' => 'required',
        //     'status' => 'required',
        //     'address' => 'required',
        // ]);

        // Create a new employee record in the database
        $employee = new Employee;
        $employee->first_name = $request->input('first-name');
        $employee->last_name = $request->input('last-name');
        $employee->gender = $request->input('gender');
        $employee->date_of_birth = $request->input('date-of-birth');
        $employee->phone_number = $request->input('phone-number');
        $employee->working_title = $request->input('working-title');
        $employee->status = $request->input('status');
        $employee->address = $request->input('address');
        $employee->save();

        // Redirect the user to the dashboard page
        return redirect('/dashboard')->with('success', 'Employee has been added');
    }
    public function showEmployeeList()
        {
            $employees = DB::table('employees')->get();
             return view('viewEmployee', compact('employees'));
        }
        public function destroy($id)
        {
            $employee = Employee::find($id);
            $employee->delete();
            return redirect()->route('dashboard')->with('success', 'Employee deleted successfully');
        }
        
}

