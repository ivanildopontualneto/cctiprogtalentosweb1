<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Publicacao extends Model
{
    protected $dateFormat = 'd/m/Y H:i';
    protected $table = 'publicacoes';
    protected $fillable = 
            [ 'id', 'titulo', 'descricao','dataInicio', 'dataTermino','deletado'];
    
    protected $dates = ['dataInicio','dataTermino'];

    function setDataInicioAttribute($date)
    {
        return $this->attributes['dataInicio'] = Carbon::createFromFormat('d/m/Y H:i', $date.'00:00')->format('d/m/Y');
    }

    function setDataTerminoAttribute($date)
    {
        return $this->attributes['dataTermino'] = Carbon::createFromFormat('d/m/Y H:i', $date.'23:59')->format('d/m/Y');
    }

    function getDataInicioAttribute()
    {
        return $this->attributes['dataInicio'];
    }

    function getDataTerminoAttribute()
    {
        return $this->attributes['dataTermino'];
    }
    
    
    public function cargos()
    {
        return $this->belongsToMany(Cargo::class);
    }
    
    public function adicionaCargo($cargo)
    {
        if (is_string($cargo)) {
            $cargo = Cargo::where('cargo','=',$cargo)->firstOrFail();
        }

        return $this->cargos()->attach($cargo);
    }

    public function removeCargo($cargo)
    {
        if (is_string($cargo)) {
            $cargo = Cargo::where('cargo','=',$cargo)->firstOrFail();
        }

        return $this->cargos()->detach($cargo);
    }

    
        
    public function documentos()
    {
        return $this->belongsToMany(Documento::class);
    }

    public function adicionaDocumento($documento)
    {
        if (is_string($documento)) {
            $documento = Documento::where('titulo','=',$documento)->firstOrFail();
        }

        return $this->documentos()->attach($documento);
    }

    public function removeDocumento($documento)
    {
        if (is_string($documento)) {
            $documento = Documento::where('titulo','=',$documento)->firstOrFail();
        }

        return $this->documentos()->detach($documento);
    }
    
}

    