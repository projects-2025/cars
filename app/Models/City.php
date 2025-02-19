<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'area_id'

    ];

    public function area(){
        return $this->belongsTo(Area::class);
    }
}
