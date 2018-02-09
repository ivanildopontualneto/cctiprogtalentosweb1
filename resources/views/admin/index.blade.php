@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    </div>
    
    @include('admin._caminho')

    <div class="row">
    @can('perfil-view')
        <div class="col s12 m6">
          <div class="card green darken-1">
            <div class="card-content white-text">
              <span class="card-title">Perfil</span>
              <p>Alterar Dados do Perfil</p>
            </div>
            <div class="card-action">
              <a href="{{route('site.perfil')}}">Visualizar</a>
            </div>
          </div>
        </div>
      @endcan
      @can('publicacoes-view')
        <div class="col s12 m6">
          <div class="card light-blue darken-4">
            <div class="card-content white-text">
              <span class="card-title">Publicações</span>
              <p>Lista de Publicações</p>
            </div>
            <div class="card-action">
              <a href="{{route ('publicacao.index')}}">Visualizar</a>
            </div>
          </div>
        </div>
      @endcan
      @can('usuario-view')
        <div class="col s12 m6">
          <div class="card purple darken-2">
            <div class="card-content white-text">
              <span class="card-title">Usuários</span>
              <p>Usuários do Sistema</p>
            </div>
            <div class="card-action">
              <a href="{{route('usuarios.index')}}">Visualizar</a>
            </div>
          </div>
        </div>
      @endcan
      @can('papel-view')  
        <div class="col s12 m6">
          <div class="card deep-orange accent-3">
            <div class="card-content white-text">
              <span class="card-title">Papéis</span>
              <p>Gerenciar Papéis do Sistema</p>
            </div>
            <div class="card-action">
              <a href="{{route('papeis.index')}}">Visualizar</a>
            </div>
          </div>
        </div>
      @endcan  
    </div>

    
</div>
@endsection