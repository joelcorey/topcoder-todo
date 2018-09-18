<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'user_id',
        'task',
        'is_complete'
        // add all other fields
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
