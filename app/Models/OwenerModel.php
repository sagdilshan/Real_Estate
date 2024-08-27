<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwenerModel extends Model
{
    use HasFactory;
    protected $table = 'owners';
    protected $guarded = [];
}
