<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id_horario
 * @property int $id_lugar
 * @property string $dia
 * @property string $hora
 * @property string $materia
 * @property Lugare $lugare
 */
class Horario extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_horario';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['id_lugar', 'dia', 'hora', 'materia'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lugare()
    {
        return $this->belongsTo('App\Lugare', 'id_lugar', 'id_lugar');
    }
}
