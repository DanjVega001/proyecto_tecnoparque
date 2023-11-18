<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'rank',
        'feedback',
        'criterio_id',
        'stand_id'
    ];

    public function criterio(){
        return $this->belongsTo(Criterio::class, 'criterios_id', 'id');
    }

    public function stand(){
        return $this->belongsTo(Stand::class, 'stands_id', 'id');
    }
}
