<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMeta extends Model
{
    use HasFactory;

    protected $fillable = ['admin_id','fname','lname','email','phone_number','ability','about','address'];

    public function admin() {
        return $this->hasOne(Admin::class);
    }
}
