<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAttendence extends Model
{
    use HasFactory;
    protected $table = 'employee_attendences';
    protected $primeryKey = 'id';
    protected $fillable = [
        'empId',
        'empStatus',

    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'empId', 'id');
    }

    public function attendances()
    {
        return $this->hasMany(EmployeeAttendence::class, 'empId', 'id');
    }
}
