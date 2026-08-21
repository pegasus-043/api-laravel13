<?php

namespace App\Models;

use App\Models\Scopes\SelectScope;
use App\Models\Scopes\IncludeScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;


#[ScopedBy([SelectScope::class, IncludeScope::class])]
class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'user_id'
    ];

    protected $guarded = [

    ];

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
