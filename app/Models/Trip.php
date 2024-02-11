<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable=[

        'pickUp',
        'dropOff',
        'category_id',

    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
