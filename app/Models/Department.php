<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function tickets()
    {
        return $this->belongsTo(Ticket::class);
    }
}
