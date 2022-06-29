<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public function tweets(){
        // 1 para n
        return $this->belongsTo(User::class);
    }
}
