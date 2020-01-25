<h1>adicionando novo veiculo</h1>
<form method="POST" action="/veiculo">
    @csrf
    <table>
        <tr>
            Modelo: <input type="text" name="modelo" id="">
            Placa: <input type="text" name="placa" id="">
            Ano: <input type="text" name="ano" id="">
        </tr>
        <input type="submit" value="enviar">
    </table>
    

</form>