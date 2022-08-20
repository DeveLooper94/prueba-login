<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
    ];

    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
    ];

    
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
    
}
