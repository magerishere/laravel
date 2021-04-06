<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['from','to','body'];

    protected $casts = ['to'=>'array'];
    
    public function user() 
    {
        return $this->belongsTo(User::class,'from');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class,'to');
    }
}
