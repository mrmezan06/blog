<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'category_id',
        'featured',
        'slug',
    ];

    protected $date = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
