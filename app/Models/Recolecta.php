<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recolecta extends Model
{
    use HasFactory;
    
    // Explicitly set the table name
    protected $table = 'recolecta';

    protected $fillable = ['cultivos_id', 'fecha_recolecta', 'cantidad', 'unidad', 'observaciones'];

    public function cultivos()
    {
        return $this->belongsTo(Cultivo::class);
    }
}