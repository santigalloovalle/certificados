<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'id_areas'];
    public function areas()
    {
        return $this->belongsTo(Area::class, 'id_areas');
    }
}
