<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StarTemplate extends Model
{
    use HasFactory;

    protected $table = 'star_template';

    protected $fillable = ['star_id', 'content'];
}
