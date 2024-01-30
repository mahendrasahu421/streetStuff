<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvanceSalary extends Model
{
    use HasFactory;
    protected $table = 'advance_salaries';
    protected $primeryKey = 'id';
    protected $fillable = [
        'empId',
        'advancePayment',
        'status',
    ];
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'empId');
    }
}
