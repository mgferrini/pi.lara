<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "user_product";  // solo se pone si la tabla es diferente al nombre del modelo  en plural
    protected $primaryKey = "id"; //solo ponerlo cuando es diferente a id, porque por default es id 
    public $timestamps = true; // Es PUBLIC. esto se pone solamente si dentro de la tabla existe las columnas updated at and created at . SINO hay que poner false}
    protected $guarded =[]; // esto significa que todos los campos pueden ser modificados . Si hay alguno que no se puede modificar lo pongo adentro

    protected $fillable = [
        'user_id', 'product_id', 'quantity', 'price', 'cart_id',
    ];

    public function productos(){
        return $this->BelongsTo("App\Product","product_id");
    }
}
