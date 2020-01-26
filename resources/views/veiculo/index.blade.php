@extends('veiculo.layout')

@section('content')
<br><br>
<div class="row">
    <div class="col-lg-12margin-tb">
        <div class="pull-left">
            <h2>Laravel 6 - Crud</h2>
        </div>
        <div class="pull-right">
        <a href="{{ route('veiculo.create') }}" class="btn btn-success">Adicionar Novo Veiculo</a>            
        </div>
    </div>
</div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

@forelse ($veiculos as $veiculo)
    <table class="table">
        <thead>
            <th>
                <td>{{ ++$i }}</td>
                <td>placa: {{ $veiculo->placa }}</td>
                <td>modelo: {{ $veiculo->modelo }}</td>
                <td>ano: {{ $veiculo->ano }}</td>
                <td>criado em:{{ $veiculo->created_at }}</td>
                <td>
                <form action="{{ route('veiculo.destroy', $veiculo->id) }}" method="post">

                    <a href="{{ route('veiculo.show', $veiculo->id) }}" class="btn btn-info">Ver</a>
                    
                    <a href="{{ route('veiculo.edit',$veiculo->id) }}" class="btn btn-warning">Editar</a>
                   
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
                </td>
            </th>
        </thead>
        
        @empty
        <th>
            <td>Nenhum Veiculo Encontrado!</td>
        </th>
    </table>
@endforelse
    {!! $veiculos->links() !!}
@endsection