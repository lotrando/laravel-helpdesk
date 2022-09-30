<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $personal_number
 * @property string $department_id
 * @property string $job_id
 * @property string $program
 * @property string|null $by_employee
 * @property string $issue
 * @property string $category
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereByEmployee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereIssue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission wherePersonalNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereProgram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Permission extends Model
{
    use HasFactory;

    protected $guarded = [];
}
