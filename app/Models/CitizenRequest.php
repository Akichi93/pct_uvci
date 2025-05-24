<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitizenRequest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'document_id',
        'type',
        'description',
        'status',
        'admin_comments',
        'attachments',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'attachments' => 'array',
    ];

    /**
     * Get the user that owns the request
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the document associated with the request
     */
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
