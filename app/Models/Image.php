<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
    ];

   /*  public function user()
    {
        return $this->belongsTo(User::class, 'image', 'title', 'updated_at', 'created_at');
    } */
}
