<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id_recordatorio
 * @property string $id_usuario
 * @property string $fecha
 * @property string $hora_inicio
 * @property string $hora_fin
 * @property string $descripcion
 * @property string $nombre
 * @property Usuario $usuario
 * @property LugaresRecordado[] $lugaresRecordados
 */
class Recordatorio extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_recordatorio';

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
    protected $fillable = ['id_usuario', 'fecha', 'hora_inicio', 'hora_fin', 'descripcion', 'nombre'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'id_usuario', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugaresRecordados()
    {
        return $this->hasMany('App\LugaresRecordado', 'id_recordatorio', 'id_recordatorio');
    }
}
