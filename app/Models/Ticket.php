<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

/**
 * App\Models\Ticket
 *
 * @property int $id
 * @property string $personal_number
 * @property string $last_name
 * @property string $first_name
 * @property string $email
 * @property string $phone
 * @property string|null $department_id
 * @property string $category
 * @property string|null $item_number
 * @property string|null $id_pc
 * @property string $title
 * @property string $issue
 * @property string|null $priority
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read Department|null $department
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereIdPc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereIssue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereItemNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket wherePersonalNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
