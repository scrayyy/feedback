<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    use HasFactory;
    protected $table = "stars";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;


}
