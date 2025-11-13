<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
    ];

    //object relation mapping
    //belongs to = m to 1
    //hasMany = 1 to m
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
