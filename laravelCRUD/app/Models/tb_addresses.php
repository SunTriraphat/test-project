<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_addresses extends Model
{
    use HasFactory;
    protected $fillable=['detail','reference'];
}
