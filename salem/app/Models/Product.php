<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'category_id',
        'description',
        'price',
        'status',
        'code',
        'color',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'time_ago'
    ];

    public function getTimeAgoAttribute(){
        return $this->created_at->diffForHumans();
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image', 'product_id');
    }

    public function image()
    {
        return $this->hasOne('App\Models\Image', 'product_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function offer()
    {
        return $this->hasOne('App\Models\Offer','product_id');
    }
}
