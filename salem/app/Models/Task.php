<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'task',
        'description',
        'dayToDeliver',
        'user_name',
        'user_phone',
        'quantity',
        'image',
        'status',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'time_ago'
    ];

    public function getTimeAgoAttribute(){
        $date = \Carbon\Carbon::parse($this->dayToDeliver);
        return $date->diffForHumans();
    }

    public function product() {
        return $this->belongsTo('App\Models\Product','product_id');
    }
}
