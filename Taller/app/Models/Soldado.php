<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soldado extends Model
{
    protected $table = 'soldado';
    protected $primaryKey = 'Cod_s';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'Cod_s',
        'Nom_s',
        'Apell_s',
        'Grado_s',
        'Cod_ce1',
        'Num_com1',
        'Cod_c2',
    ];

    // Relaciones
    public function cuerpoEjercito()
    {
        return $this->belongsTo(CuerpoEjercito::class, 'Cod_ce1');
    }

    public function compania()
    {
        return $this->belongsTo(Compania::class, 'Num_com1');
    }

    public function cuartel()
    {
        return $this->belongsTo(Cuartel::class, 'Cod_c2');
    }
}
