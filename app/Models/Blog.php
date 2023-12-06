<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
    'provinsi_id','user_id','image', 'title', 'content','lokasi'
    ];


    protected $primaryKey = 'id';

    public function Blog()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
