<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KepuasanPerawatDetail extends Model
{
    protected $table = 'kepuasan_perawat_details';
    protected $guarded = [];

    public function kepuasan_perawat()
    {
        return $this->belongsTo(KepuasanPerawat::class, 'kepuasan_perawat_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
