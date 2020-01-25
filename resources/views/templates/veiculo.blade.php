<h1>Dados do seu Veiculo</h1>
<table>
    placa:<input type="text" name="placa" id="">
    modelo:<input type="text" name="modelo" id="">
    ano:<input type="text" name="ano" id="">
    <input type="submit" value="confimar">
</table>

@foreach ($veiculos as $veiculo) 
    {{ $veiculo->veiculo }}
@endforeach