<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name'
    ];

    /**
     * Model relationship to Ticket::class
     *
     * @return void
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public $timestamps = false;
}
