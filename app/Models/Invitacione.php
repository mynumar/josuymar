<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitacione extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }

    public function evento(){
        return $this->belongsTo(Evento::class);
    }

    public function confirmaciones(){
        return $this->hasMany(Confirmacione::class);
    }

    public function rechazados(){
        $invitados = $this->grupo->invitados;
        $confirmaciones = $this->confirmaciones;
        $rechazados = null;
        if($this->estado == 2){
            foreach ($confirmaciones as $confirmacione) {
                $invitados = $invitados->except($confirmacione->invitado_id);
            }
            $rechazados = $invitados;
        }

        return $rechazados;
    }

}
