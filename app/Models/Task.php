<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model {

    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'completed'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}