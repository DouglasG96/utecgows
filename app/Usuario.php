<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id_usuario
 * @property string $id_tipo
 * @property string $contrasena
 * @property string $recuperacion
 * @property TipoUsuario $tipoUsuario
 * @property Recordatorio[] $recordatorios
 */
class Usuario extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_usuario';

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
    protected $fillable = ['id_tipo', 'contrasena', 'recuperacion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoUsuario()
    {
        return $this->belongsTo('App\TipoUsuario', 'id_tipo', 'id_tipo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recordatorios()
    {
        return $this->hasMany('App\Recordatorio', 'id_usuario', 'id_usuario');
    }
}
