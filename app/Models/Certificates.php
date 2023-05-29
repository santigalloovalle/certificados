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

    public function roles()
    {
        return $this->belongsTo(Role::class, 'id_roles');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
    
}
