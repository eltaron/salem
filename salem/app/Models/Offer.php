<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'end_at',
        'product_id',
        'price',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'time_ago'
    ];

    public function getTimeAgoAttribute(){
        $date = \Carbon\Carbon::parse($this->end_at);
        return $date->diffForHumans();
    }

    public function product() {
        return $this->belongsTo('App\Models\Product','product_id');
    }
}
