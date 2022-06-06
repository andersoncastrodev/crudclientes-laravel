@extends('templates.base')

@section('conteudo')

<div class="container">
    <form name="formCad" id="formCad" method="POST" action="{{ url("cadcliente/store") }}">
     @csrf
     <p></p>

      <label>Nome:</label>
      <input class="form-control" type="text" name="nome" id="nome" require> <br>

      <label>Endereço:</label>
      <input class="form-control" type="text" name="endereco" id="endereco" require> <br>
      
      <label>Telefone:</label>
      <input class="form-control" type="text" name="telefone" id="telefone" require> <br>

    </form>

</div>

@endsection