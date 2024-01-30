<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'age',
        'email',
        'contect_number',
        'sallry',
        'address',
        'id_proof',
        'designation_id', // Make sure to include the foreign key field
        'status',
        // Add any other fields you want to include
    ];
}
