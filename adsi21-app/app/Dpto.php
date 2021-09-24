<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dpto extends Model
{
    protected $table = 'dptos';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'nombre',
        'pais_id',
    ]; 

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }
}
