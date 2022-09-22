<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

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
