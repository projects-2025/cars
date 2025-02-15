<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status'

    ];

    public function cities(){
        return $this->hasMany(City::class);
    }

}
