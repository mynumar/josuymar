<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }

    public function confirmaciones(){
        return $this->hasMany(Confirmacione::class);
    }
}
