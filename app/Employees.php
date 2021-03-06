<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = [
        'id',
        'name',
        'timeIn',
        'timeOut',
        'totalHoursWorked',
        'totalBreakUsed',
        'storeId'
    ];
}
