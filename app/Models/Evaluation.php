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
        'user_id',
        'stand_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function stand(){
        return $this->belongsTo(Stand::class, 'stands_id', 'id');
    }
}
