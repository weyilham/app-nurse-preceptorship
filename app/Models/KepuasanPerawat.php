<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KepuasanPerawat extends Model
{
    protected $table = 'kepuasan_perawats';
    protected $guarded = [];

    public function details()
    {
        return $this->hasMany(KepuasanPerawatDetail::class, 'kepuasan_perawat_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
