<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirmacione extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function invitacione(){
        return $this->belongsTo(Invitacione::class);
    }

    public function invitado(){
        return $this->belongsTo(Invitado::class);
    }
}
