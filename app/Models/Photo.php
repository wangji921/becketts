<?php

namespace App\Models;

class Photo extends Model
{
    protected $fillable = ['title', 'year', 'month', 'user_id', 'category_id', 'description', 'reply_count', 'last_reply_user_id', 'order'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
