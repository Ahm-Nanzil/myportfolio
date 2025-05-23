<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DealTask extends Model
{
    protected $fillable = [
        'deal_id',
        'name',
        'date',
        'time',
        'priority',
        'status',
        'recurrence',
        'repeat_interval',
        'end_recurrence',
        'reminder',
        'recurrence_status',
        'created_by',
        'assigned_users',
    ];

    public static $priorities = [
        1 => 'Low',
        2 => 'Medium',
        3 => 'High',
    ];
    public static $status = [
        0 => 'On Going',
        1 => 'Completed'
    ];
}
