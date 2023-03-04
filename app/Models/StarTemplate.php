<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StarTemplate extends Model
{
    use HasFactory;

    protected $table = 'star_template';

    protected $fillable = ['star_id', 'content'];

    public static function getQueryByStarId($starId)
    {
        return self::where('star_id', $starId);
    }

    public static function getByStarId($starId)
    {
        return self::getQueryByStarId($starId)->get();
    }

    public static function deleteByStar($starId)
    {
        self::getQueryByStarId($starId)->delete();
    }
}
