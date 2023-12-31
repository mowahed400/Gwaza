<?php

namespace App\Models;

use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory, Likeable;

    protected $fillable = [
        'postId',
        'userId',
        'parentCommentId',
        'commentBody',
        'photo',
        'video',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'userId');
    }
    public function Posts()
    {
        return $this->belongsTo(Post::class,'postId');
    }

}
