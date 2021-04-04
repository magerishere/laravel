<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','fname','lname','email','phone_number','ability','about','address'];

    protected $hidden = ['phone_number','address'];

    public function user() {
        return $this->hasOne(User::class);
    }
}
