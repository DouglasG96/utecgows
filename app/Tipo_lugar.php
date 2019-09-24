<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_tipo_lugar
 * @property string $tipo
 * @property Lugare[] $lugares
 */
class Tipo_lugar extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tipos_lugares';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_tipo_lugar';

    /**
     * @var array
     */
    protected $fillable = ['tipo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugares()
    {
        return $this->hasMany('App\Lugare', 'id_tipo_lugar', 'id_tipo_lugar');
    }
}
