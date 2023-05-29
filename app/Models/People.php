<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    public function contracts(){
        return $this->belongsTo(Contract::class, 'id_contracts');
    }
    public function documents(){
        return $this->belongsTo(Document::class, 'id_documents');
    }
    public function payments(){
        return $this->belongsTo(Payment::class, 'id_payments');
    }
    public function users(){
        return $this->belongsTo(User::class, 'id_users');
    }
    public function roles(){
        return $this->belongsTo(Role::class, 'id_roles');
    }
    
}
