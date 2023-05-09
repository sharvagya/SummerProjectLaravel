<?php

namespace App\Models;
use App\Models\Salary;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'phone_number',
        'post',
        'status',
        'address',
    ];
    public function salaries()
{
    return $this->hasMany(Salary::class);
}
public function createSalaryRecord()
{
    $salary = new Salary;
    $salary->employee_id = $this->id;
    $salary->name = $this->first_name . ' ' . $this->last_name;
    $salary->date = Carbon::today()->toDateString();
    $salary->status = "pending";
    $salary->amount=0;
    $salary->created_at = now();
    $salary->updated_at = now();
    $salary->save();
}
}
