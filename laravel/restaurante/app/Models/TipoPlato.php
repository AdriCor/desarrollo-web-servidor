<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPlato extends Model
{
    use HasFactory;
// SELECT * FROM platos 
// JOIN tipo_platos tp
// WHERE p.id= tp.plato_id;

    public function platos(){
        return $this->hasMany(Plato::class);
    }

}
