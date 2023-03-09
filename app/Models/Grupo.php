<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function invitados(){
        return $this->hasMany(Invitado::class);
    }

    public function invitaciones(){
        return $this->hasMany(Invitacione::class);
    }
}
