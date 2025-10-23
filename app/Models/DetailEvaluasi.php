<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailEvaluasi extends Model
{
    protected $table = 'detail_evaluasis';
    protected $guarded = ['id'];

    public function evaluasi_kompetensi()
    {
        return $this->belongsTo(EvaluasiKompetensi::class, 'evaluasi_kompetensi_id');
    }
}
