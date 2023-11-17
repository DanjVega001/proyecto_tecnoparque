<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitante extends Model
{
    use HasFactory;

    protected $fillable = [
        'document',
        'name',
        "address",
        'phone_number',
        "birthday",
        "genere",
        'user_id',
    ];


    public function user(){
        return $this->hasOne(User::class,'id'); 
    }

}
