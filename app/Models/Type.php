<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'status',
        'brand_id',
    ];
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
