<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_lugar
 * @property int $id_tipo_lugar
 * @property string $nombre
 * @property string $descripcion
 * @property string $foto
 * @property string $dependencias
 * @property TiposLugare $tiposLugare
 * @property Horario[] $horarios
 * @property LugaresCoordenada[] $lugaresCoordenadas
 */
class Lugar extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'lugares';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_lugar';

    /**
     * @var array
     */
    protected $fillable = ['id_tipo_lugar', 'nombre', 'descripcion', 'foto', 'dependencias'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tiposLugare()
    {
        return $this->belongsTo('App\TiposLugare', 'id_tipo_lugar', 'id_tipo_lugar');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Horario', 'id_lugar', 'id_lugar');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugaresCoordenadas()
    {
        return $this->hasMany('App\LugaresCoordenada', 'id_lugar', 'id_lugar');
    }
}
