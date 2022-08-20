<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'id',
        'nombre',
        'precio',
        'descripcion',
        'categoria_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'precio' => 'double',
        'descripcion' => 'string',
        'categoria_id' => 'integer',
    ];



    
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }
    
}
