<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->string('working_title');
            $table->string('status');
            $table->string('address');
            $table->timestamps();
        });
        DB::unprepared('
        CREATE TRIGGER tr_employee_insert
        AFTER INSERT
        ON employees
        FOR EACH ROW
        INSERT INTO mydb.salaries (employee_id, name, date, created_at, updated_at)
        VALUES (NEW.id, CONCAT(NEW.first_name, " ", NEW.last_name), NULL, NOW(), NOW(), NOW());
    ');
    

    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
