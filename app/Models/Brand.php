<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;


    protected $fillable = [
        'image',
        'title',
        'status',
    ];

    public function types(){
        return $this->hasMany(Type::class);
    }
}
