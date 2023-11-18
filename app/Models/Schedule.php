<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'hour_start',
        'hour_end',
        "day",
    ];


    public function place(){
        return $this->hasOne(Place::class,'id_place'); 
    }
}
