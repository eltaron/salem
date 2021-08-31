<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'product_id',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id');
    }
}
