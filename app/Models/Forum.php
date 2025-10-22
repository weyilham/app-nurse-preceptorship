<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forums';
    protected $fillable = [
        'judul',
        'deskripsi',
        'kategori',
        'penulis',
        'gambar',
    ];

   public function userPenulis()
    {
        return $this->belongsTo(User::class, 'penulis', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

}
