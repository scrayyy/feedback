<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = "blogs";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
