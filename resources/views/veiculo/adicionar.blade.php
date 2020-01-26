@extends('veiculo.layout')

@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Adicionar Novo Veiculo</h2>
            </div>
            <div class="pull-right">
                <a href=" {{ route('veiculo.index') }} " class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>Error com input. <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>        
    @endif

    <form action="{{ route('veiculo.store') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Modelo:</strong>
                    <input type="text" name="modelo" class="form-control" placeholder="Modelo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Placa:</strong>
                    <input type="text" name="placa" class="form-control" placeholder="Placa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ano:</strong>
                    <input type="text" name="ano" class="form-control" placeholder="ano">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
@endsection