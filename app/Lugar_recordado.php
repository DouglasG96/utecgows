<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id_lugares_re
 * @property int $id_lugares_coordenadas
 * @property string $id_recordatorio
 * @property LugaresCoordenada $lugaresCoordenada
 * @property Recordatorio $recordatorio
 */
class Lugar_recordado extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'lugares_recordados';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_lugares_re';

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
    protected $fillable = ['id_lugares_coordenadas', 'id_recordatorio'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lugaresCoordenada()
    {
        return $this->belongsTo('App\LugaresCoordenada', 'id_lugares_coordenadas', 'id_lugares_coordenadas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recordatorio()
    {
        return $this->belongsTo('App\Recordatorio', 'id_recordatorio', 'id_recordatorio');
    }
}
