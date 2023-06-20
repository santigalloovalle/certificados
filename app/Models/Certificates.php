<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    use HasFactory;

    
    public function Certificates()
    {
        return $this->hasMany(Certificates::class,'id');
    }

    public function people()
    {
        return $this->belongsTo(People::class, 'id_people');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
    
}
