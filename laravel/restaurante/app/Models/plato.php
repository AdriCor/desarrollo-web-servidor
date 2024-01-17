<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plato extends Model
{
    use HasFactory;

    public function tipo_plato(){
        return $this->belongsTo(TipoPlato::class);
    }

}
