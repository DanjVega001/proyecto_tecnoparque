<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'document',
        'name',
        'phone_number',
        'user_id',
    ];


    public function user(){
        return $this->hasOne(User::class,'id'); 
    }
}
