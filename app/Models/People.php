<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    public function contracts(){
        return $this->hasMany(Contract::class, 'id');
    }
    public function documents(){
        return $this->hasMany(Document::class, 'id');
    }
    public function payments(){
        return $this->hasMany(Payment::class, 'id');
    }
    public function roles(){
        return $this->hasMany(Rol::class, 'id');
    }
    public function users(){
        return $this->hasMany(User::class, 'id');
    }
}
