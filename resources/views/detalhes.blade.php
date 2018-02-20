@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col s6">
            <div class="card">
                <div class="card-stacked">
                    <div class="card-content">
                        <h5 class="header">{{$publicacao->titulo}}</h5>
                        <p>{{$publicacao->descricao}}</p>
                        <p><strong>Cargos:</strong>{{$publicacao->cargos}}</p>
                        <p><strong>Período de Inscrições:</strong> de {{$publicacao->dataInicio}} - {{$publicacao->horaInicio}}h até {{$publicacao->dataTermino}} - {{$publicacao->horaTermino}}h (Horário de Boa Vista).</p>
                    </div>
                    <div class="card-action">
                        <a href="!#">Inscreva-se!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card">
                <div class="card-stacked">
                    <div class="card-content">
                        <h5 class="header">Editais</h5>
                        <div class="divider"></div>
                        <div class="section">
                        @foreach($publicacao->documentos as $documento)
                            <p>{{ $documento->titulo }}</p>
                            <div class="section">
                            <a title="Baixar" class="btn green" href="{{ $documento->url }}" download><i class="material-icons">file_download</i></a>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
