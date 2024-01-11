<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;
    protected $table = "url";
    protected $fillable = ['user_id', 'long_url', 'short_url', 'click'];
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
