<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_coor
 * @property string $nombre
 * @property string $latitud
 * @property string $longitud
 * @property LugaresCoordenada[] $lugaresCoordenadas
 */
class Coordenadas extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_coor';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'latitud', 'longitud'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugaresCoordenadas()
    {
        return $this->hasMany('App\LugaresCoordenada', 'id_coor', 'id_coor');
    }
}
