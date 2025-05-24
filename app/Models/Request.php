<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Request extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'reference',
        'status',
        'description',
        'request_date',
        'response_date',
        'document',
        'deleted_at',
        'user_id',
        'created_at',
        'updated_at',
    ];
    protected $hidden = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    protected $casts = [
        'request_date' => 'datetime',
        'response_date' => 'datetime',
    ];
    public function setDocumentAttribute($value)
    {
        $this->attributes['document'] = $value;
    }
    public function getDocumentAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
