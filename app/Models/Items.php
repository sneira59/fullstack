<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = "items";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $guarded = [];
}
