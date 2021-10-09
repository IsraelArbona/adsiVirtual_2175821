<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudads';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'nombre',
        'dpto_id',
    ]; 

    public function dpto()
    {
        return $this->belongsTo(Dpto::class);
    }
}
