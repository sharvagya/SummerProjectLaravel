<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
