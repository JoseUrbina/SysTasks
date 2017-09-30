<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
    // Este modelo hace su de esa tabla en especifico, sino se especifica, convierte a minuscula el nombre y lo vuelve
    // plural, para hacer uso de la tabla apropiada
    
	protected $table = 'tasks';

	// no se agrego completed ->> porque tiene un valor por defecto
    protected $fillable = [
        'user_id', 'name'
    ];

    // one to many(inverse)
    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
