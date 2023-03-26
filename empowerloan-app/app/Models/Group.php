<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'grp_code',
        'grp_name',
        'meeting_day',
        'grp_leader',
        'grp_leader_no',
        'grp_treasurer',
        'grp_treasurer_no',
        'emp_no',
        'branch_code',
        'meeting_place',
        'grp_distance',
        'joining_date',
        'status',
        
    ];
}
