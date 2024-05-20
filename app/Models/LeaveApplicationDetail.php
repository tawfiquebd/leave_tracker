<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApplicationDetail extends Model
{
    use HasFactory;

    protected $table = "leave_application_details";

    protected $fillable = [
        'id', 'user_id', 'leave_application_id', 'leave_date', 'created_by', 'updated_by', 'deleted_by'
    ];
}
