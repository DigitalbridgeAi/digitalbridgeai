<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'slug',
        'category_id',
        'details',
        'photo',
        'source',
        'views',
        'status',
        'meta_tag',
        'meta_description',
        'tags',
    ];

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
            $model->updated_at = $model->freshTimestamp();
        });
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id')->withDefault();
    }

}
