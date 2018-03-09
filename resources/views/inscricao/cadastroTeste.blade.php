@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
    </div>

    @include('dashboard._caminho')

    <div class="row">
        <h4 class="center">Formulário de Inscrição</h4>
    </div>

    <div class="row">
        <form id="regForm" novalidate action="{{ url('') }}" method="post">
            {{csrf_field()}}
            <div class="card-panel white">
                <div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s3">
                                <a href="#cadastrodocandidato">Inscrição do Candidato</a>
                            </li>
                            <li class="tab col s3">
                                <a href="#experiencias">Experiências do Usuário </a>
                            </li>
                            <li class="tab col s3">
                                <a href="#qualificacao">Qualificações do Usuário</a>
                            </li>
                            <li class="tab col s3">
                                <a href="#cargos">Escolha do Cargo </a>
                            </li>

                        </ul>
                    </div>

                    <div id="cadastrodocandidato" class="col s12">
                        <div class="row">
                        </div>


                        <div class="col s12">
                            <div class="input-field col s8">
                                <input type="text" name="nomeCompleto" class="validate" disabled value="{{ isset($inscricao->nomeCompleto) && !old('nomeCompleto') ? $inscricao->nomeCompleto : '' }}{{old('nomeCompleto')}}">
                                <label>Nome Completo</label>
                            </div>

                            <div class="input-field col s4">
                                <input type="text" name="dataNascimento" class="datepicker" disabled value="{{ isset($inscricao->dataNascimento) && !old('dataNascimento') ? $inscricao->dataNascimento : '' }}{{old('dataNascimento')}}">
                                <label>Data de Nascimento</label>
                            </div>
                        </div>

                        <div class="col s12">
                            <div class="input-field col s6">
                                <input type="text" name="mae" class="validate" disabled value="{{ isset($inscricao->mae) && !old('mae') ? $inscricao->mae : '' }}{{old('mae')}}">
                                <label>Nome da Mãe </label>
                            </div>

                            <div class="input-field col s6">
                                <input type="text" name="pai" class="validate" disabled value="{{ isset($inscricao->pai) && !old('pai') ? $inscricao->pai : '' }}{{old('pai')}}">
                                <label>Nome do Pai</label>
                            </div>
                        </div>

                        <div class="col s12">
                            <div class="input-field col s12">
                                <input type="text" name="escolaridade" class="validate" disabled value="{{ isset($inscricao->escolaridade) && !old('escolaridade') ? $inscricao->escolaridade : '' }}{{old('escolaridade')}}">
                                <label>Escolaridade </label>
                            </div>
                        </div>

                        <div class="col s12">
                            <div class="input-field col s3">
                                <select disabled name="sexo">
                                    <option value="{{ isset($inscricao->sexo) && !old('sexo') ? $inscricao->sexo : '' }}{{old('sexo')}}" selected></option>
                                    <option disabled value="Masculino">Masculino</option>
                                    <option disabled value="Feminino">Feminino</option>
                                    <option disabled value="Outros">Outros</option>
                                </select>
                                <label>Sexo</label>
                            </div>

                            <div class="input-field col s5">
                                <input type="text" name="cpf" id="cpf" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" class="validate" disabled value="{{ isset($inscricao->cpf) && !old('cpf') ? $inscricao->cpf : '' }}{{old('cpf')}}">
                                <label>CPF </label>
                            </div>

                            <div class="input-field col s4">
                                <input type="text" name="identidade" class="validate" disabled value="{{ isset($inscricao->identidade) && !old('identidade') ? $inscricao->identidade : '' }}{{old('identidade')}}">
                                <label>RG </label>
                            </div>
                        </div>

                        <div class="col s12">
                            <div class="input-field col s3">
                                <input type="text" name="cep" id="cep" pattern="[0-9]{5}-[0-9]{3}" class="validate" disabled value="{{ isset($inscricao->cep) && !old('cep') ? $inscricao->cep : '' }}{{old('cep')}}">
                                <label>CEP</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="disabled" type="text" name="cidade" id="cidade" class="validate" disabled value="{{ isset($inscricao->cidade) && !old('cidade') ? $inscricao->cidade : '' }}{{old('cidade')}}">
                                <label>Cidade</label>
                            </div>

                            <div class="input-field col s3">
                                <input id="disabled" type="text" name="estado" id="estado" class="validate" disabled value="{{ isset($inscricao->estado) && !old('estado') ? $inscricao->estado : '' }}{{old('estado')}}">
                                <label>UF</label>
                            </div>
                        </div>

                        <div class="col s12">
                            <div class="input-field col s6">
                                <input id="disabled" type="text" name="endereco" id="endereco" class="validate" disabled value="{{ isset($inscricao->endereco) && !old('endereco') ? $inscricao->endereco : '' }}{{old('endereco')}}">
                                <label>Endereço</label>
                            </div>

                            <div class="input-field col s4">
                                <input id="disabled" type="text" name="bairro" id="bairro" class="validate" disabled value="{{ isset($inscricao->bairro) && !old('bairro') ? $inscricao->bairro : '' }}{{old('bairro')}}">
                                <label>Bairro </label>
                            </div>

                            <div class="input-field col s2">
                                <input id="disabled" type="text" name="numero" class="validate" disabled value="{{ isset($inscricao->numero) && !old('numero') ? $inscricao->numero : '' }}{{old('numero')}}">
                                <label>Nº</label>
                            </div>
                        </div>

                        <div class="col s12">
                            <div class="input-field col s6">
                                <input type="text" name="email" class="validate" disabled value="{{ isset($inscricao->email) && !old('email') ? $inscricao->email : '' }}{{old('email')}}">
                                <label>Email </label>
                            </div>

                            <div class="input-field col s6">
                                <input type="text" name="telefone" id="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" class='validate' disabled
                                    value="{{ isset($inscricao->telefone) && !old('telefone') ? $inscricao->telefone : '' }}{{old('telefone')}}">
                                <label>Contato</label>
                            </div>
                        </div>
                    </div>

                    <div id="experiencias" class="col s12">
                        <div class="row">
                        </div>

                        <div class="col s12">

                            <a class="input-field col s12">Experiências Profissionais</a>


                            <br>
                            <div id="listas">
                                <div>
                                    <input placeholder="Descricão" type="text" name="experiencias[0][descricao]" value="{{ isset($pessoa->experiencias->descricao) ? $pessoa->experiencias->descricao : '' }}">
                                    <input placeholder="Empresa" type="text" name="experiencias[0][empresa]" value="{{ isset($pessoa->experiencias->empresa) ? $pessoa->experiencias->empresa : '' }}">
                                </div>

                                <button class="btn blue" id="add_field">Adicionar</button>
                            </div>

                            <div class="row">
                            </div>

                            <div class="input-field col s12">
                                <p>Período</p>

                            </div>

                            <div class="input-field col s3 {{$errors->has('dataInE') ? 'has-error' : ''}}">
                                <input type="text" name="dataInE" class="datepicker" disabled value="{{ isset($experiencia->dataInE) && !old('dataInE') ? $experiencia->funcao : '' }}{{old('dataInE')}}">
                                <label>Data de inicio</label>
                                @if($errors->has('dataInE'))
                                <span class="red-text">
                                    <text>{{$errors->first('dataInE')}}</text>
                                </span>
                                @endif
                            </div>

                            <div class="input-field col s3 {{$errors->has('dataTermE') ? 'has-error' : ''}}">
                                <input type="text" name="dataTermE" class="datepicker" disabled value="{{ isset($experiencia->dataTermE) && !old('dataTermE') ? $experiencia->dataTermE : '' }}{{old('dataTermE')}}">
                                <label>Data de fim</label>
                                @if($errors->has('dataTermE'))
                                <span class="red-text">
                                    <text>{{$errors->first('dataTermE')}}</text>
                                </span>
                                @endif
                            </div>

                            <div class="input-field col s6 {{$errors->has('atividade') ? 'has-error' : ''}}">
                                <input type="text" name="atividade" class="validate" disabled value="{{ isset($experiencia->atividade) && !old('atividade') ? $experiencia->atividade : '' }}{{old('atividade')}}">
                                <label>Atividades Desempenhadas</label>
                                @if($errors->has('atividade'))
                                <span class="red-text">
                                    <text>{{$errors->first('atividade')}}</text>
                                </span>
                                @endif
                            </div>

                            <div class="row">
                            </div>

                        </div>

                        <div class="row">
                        </div>

                        <div class="col s12">

                            <a class="input-field col s12">Participações em Cursos Profissionalizantes</a>

                            <div class="input-field col s6 {{$errors->has('instituicao') ? 'has-error' : ''}}">
                                <input type="text" name="instituicao" class="validate" disabled value="{{ isset($experiencia->instituicao) && !old('instituicao') ? $experiencia->instituicao : '' }}{{old('instituicao')}}">
                                <label>Instituição </label>
                                @if($errors->has('instituicao'))
                                <span class="red-text">
                                    <text>{{$errors->first('instituicao')}}</text>
                                </span>
                                @endif
                            </div>

                            <div class="input-field col s6 {{$errors->has('curso') ? 'has-error' : ''}}">
                                <input type="text" name="curso" class="validate" disabled value="{{ isset($experiencia->curso) && !old('curso') ? $experiencia->curso : '' }}{{old('curso')}}">
                                <label>Cursos</label>
                                @if($errors->has('curso'))
                                <span class="red-text">
                                    <text>{{$errors->first('curso')}}</text>
                                </span>
                                @endif
                            </div>

                            <div class="input-field col s12">
                                <p>Período</p>
                            </div>

                            <div class="input-field col s3 {{$errors->has('dataInI') ? 'has-error' : ''}}">
                                <input type="text" name="dataInI" class="datepicker" disabled value="{{ isset($experiencia->dataInI) && !old('dataInI') ? $experiencia->dataInI : '' }}{{old('dataInI')}}">
                                <label>Cursos</label>
                                <label>Data de inicio</label>
                                @if($errors->has('dataInI'))
                                <span class="red-text">
                                    <text>{{$errors->first('dataInI')}}</text>
                                </span>
                                @endif
                            </div>

                            <div class="input-field col s3 {{$errors->has('dataTermI') ? 'has-error' : ''}}">
                                <input type="text" name="dataTermI" class="datepicker" disabled value="{{ isset($experiencia->dataTermI) && !old('dataTermI') ? $experiencia->dataTermI : '' }}{{old('dataTermI')}}">
                                <label>Data de fim</label>
                                @if($errors->has('dataTermI'))
                                <span class="red-text">
                                    <text>{{$errors->first('dataTermI')}}</text>
                                </span>
                                @endif
                            </div>

                            <div class="input-field col s6 {{$errors->has('cargaHora') ? 'has-error' : ''}}">
                                <input type="text" name="cargaHora" class="validate" disabled value="{{ isset($experiencia->cargaHora) && !old('cargaHora') ? $experiencia->cargaHora : '' }}{{old('cargaHora')}}">
                                <label>Carga horária</label>
                                @if($errors->has('cargaHora'))
                                <span class="red-text">
                                    <text>{{$errors->first('cargaHora')}}</text>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col s12">
                            <a class="input-field col s12">Certificações</a>

                            <div class="input-field col s12 {{$errors->has('aptidao') ? 'has-error' : ''}}">
                                <input type="text" name="aptidao" class="validate" disabled value="{{ isset($experiencia->aptidao) && !old('aptidao') ? $experiencia->aptidao : '' }}{{old('aptidao')}}">
                                <label>Aptidões</label>
                                @if($errors->has('aptidao'))
                                <span class="red-text">
                                    <text>{{$errors->first('aptidao')}}</text>
                                </span>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div id="qualificacao" class="col s12">
                        <div class="col s12">
                            <a class="input-field col s12">Certificações</a>

                            <div class="input-field col s12 {{$errors->has('aptidao') ? 'has-error' : ''}}">
                                <input type="text" name="aptidao" class="validate" disabled value="{{ isset($experiencia->aptidao) && !old('aptidao') ? $experiencia->aptidao : '' }}{{old('aptidao')}}">
                                <label>Aptidões</label>
                                @if($errors->has('aptidao'))
                                <span class="red-text">
                                    <text>{{$errors->first('aptidao')}}</text>
                                </span>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div id="cargos" class="col s12">
                        <center>
                            <div class="input-field col s6 offset-s3">
                                <select name="cargo_id">

                                    <optgroup label="#">
                                        <option value="#"></option>
                                    </optgroup>


                                </select>
                                <button class="btn green">Confirmar</button>
                            </div>
                        </center>
                    </div>
                </div>
                <div style="overflow:auto;">
                    <div style="">
                        <button class="btn deep-orange accent-4 btn-info left " id="prevBtn" onclick="nextPrev(-1)">Voltar</button>
                        <button class="btn light-blue darken-4 btn-info right " id="nextBtn" onclick="nextPrev(1)">Próximo</button>
                    </div>
                </div>

                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>

                </div>
            </div>
        </form>
    </div>
</div>

@endsection