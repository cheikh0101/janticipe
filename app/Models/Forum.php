<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'content', 'category', 'image', 'genre'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
