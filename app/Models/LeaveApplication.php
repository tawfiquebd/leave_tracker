<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    use HasFactory;

    protected $table = "leave_applications";

    protected $fillable = [
        'id', 'user_id', 'leave_type_id', 'application_date',
        'is_approve', 'start_date', 'end_date', 'number_of_days',
        'leave_reason', 'created_by', 'updated_by', 'deleted_by'
    ];
}
