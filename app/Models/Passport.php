<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'date',
        'user_id',
        'stand_id'
    ];


    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function stand(){
        return $this->belongsTo(Stand::class, 'stand_id', 'id');
    }
}
