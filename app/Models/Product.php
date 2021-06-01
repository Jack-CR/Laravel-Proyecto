<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'nombre',
        'categoria',
        'imagen'
    ];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function coments(){
        return $this->hasMany(Coment::class);
    }
}
