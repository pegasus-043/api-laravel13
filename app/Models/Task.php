<?php

namespace App\Models;

use App\Models\Scopes\SelectScope;
use App\Models\Scopes\IncludeScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;


#[ScopedBy([
    SelectScope::class, 
    IncludeScope::class
])]
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

    /**
     * Método personalizado para resolver la consulta de la API.
     */
    public static function getOrPaginate()
    {
        // 1. Iniciamos la consulta de Eloquent (aquí se activan de inmediato tus Global Scopes)
        $query = self::query();

        if (request('perPage')) {
            return $query->paginate(request('perPage'));
        }

        return $query->get();
    }
}
