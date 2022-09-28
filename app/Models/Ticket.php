<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Ticket extends Model
{
    use HasFactory, Sortable;

    protected $guarded = [];

    public $sortable = [
        'title',
        'status',
        'category',
        'created_at',
        'updated_at'
    ];

    /**
     * Model relationship to Comment::class
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Model relationship to User::class
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
