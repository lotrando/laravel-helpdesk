<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Role extends Model
{
    use HasFactory, Sortable;
    /**
     * Sortable columns
     *
     * @var array
     */
    public $sortable = [
        'name'
    ];

    /**
     * Fillable input fields
     *
     * @var array
     */
    public $fillable = ['name'];

    /**
     * Disable timestamps in model
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Model relationship to User::class
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
