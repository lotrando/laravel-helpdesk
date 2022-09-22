<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'user_id',
        'comment'
    ];

    /**
     * Model relationship to Ticket::class
     *
     * @return void
     */
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
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
}
