<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable= array('todo', 'description', 'duration', 'updated_at');

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
