<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enfermerium extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'enfermeria';

    protected $dates = [
        'fecha',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'fecha',
        'hora_de_la_consulta',
        'documento',
        'nombre',
        'grado',
        'edad',
        'direccion',
        'eps',
        'grupo_sanguineo',
        'rh',
        'telefono',
        'nombre_del_padre',
        'nombre_de_la_madre',
        'telefono_del_padre',
        'telefono_de_la_madre',
        'correo_del_padre',
        'correo_de_la_madre',
        'descripcion',
        'tratamiento',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getFechaAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFechaAttribute($value)
    {
        $this->attributes['fecha'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
