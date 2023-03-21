<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    use HasFactory;
    protected $fillable = [
        'branch_id',
        'emp_no',
        'name',
        'email',
        'joining_date',
        'dob',
        'gender',
        'address',
        'age',
        'phone',
        'educational',
        'contact_person',
        'contact_no',
        'status',
    ];
}
