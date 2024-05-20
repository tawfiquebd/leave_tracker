<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    use HasFactory;

    protected $table = "leave_types";

    protected $fillable = [
        'id', 'name', 'number_of_days', 'created_by', 'updated_by', 'deleted_by'
    ];
}
