<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_lugares_coordenadas
 * @property int $id_coor
 * @property int $id_lugar
 * @property Coordenada $coordenada
 * @property Lugare $lugare
 * @property LugaresRecordado[] $lugaresRecordados
 */
class Lugar_coordenada extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'lugares_coordenadas';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_lugares_coordenadas';

    /**
     * @var array
     */
    protected $fillable = ['id_coor', 'id_lugar'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coordenada()
    {
        return $this->belongsTo('App\Coordenada', 'id_coor', 'id_coor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lugare()
    {
        return $this->belongsTo('App\Lugare', 'id_lugar', 'id_lugar');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugaresRecordados()
    {
        return $this->hasMany('App\LugaresRecordado', 'id_lugares_coordenadas', 'id_lugares_coordenadas');
    }
}
