<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Archive extends Model
{
    use HasFactory;
    protected $fillable = [
        'request_id',
        'archived_at',
        'status',
        'created_at',
        'updated_at',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $casts = [
        'archived_at' => 'datetime',
    ];
    public function request()
    {
        return $this->belongsTo(Request::class, 'request_id');
    }
    public function setArchivedAtAttribute($value)
    {
        $this->attributes['archived_at'] = $value;
    }
    public function getArchivedAtAttribute($value)
    {
        return $value ? \Carbon\Carbon::parse($value)->format('Y-m-d H:i:s') : null;
    }
}
