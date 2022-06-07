@extends('templates.base')

@section('conteudo')

<div class="container">
   
<form name="formCard" id="formCard" method="POST" action="{{ url("edtcliente/{$cliente->id}/update") }} ">
  @csrf  
  <p></p>
  <label>Codigo:</label>
  <input class="form-control" type="text" name="id" id="id" value="{{ $cliente->id }}" require>

  <label>Nome:</label>
  <input class="form-control" type="text" name="nome" id="nome" value="{{ $cliente->nome }}" require>
 
  <label>Endereço:</label>
  <input class="form-control" type="text" name="endereco" id="endereco" value="{{ $cliente->endereco }}" require>

  <label>Telefone:</label>
  <input class="form-control" type="text" name="telefone" id="telefone" value="{{ $cliente->telefone }}" require>

  <input class="btn btn-primary" type="submit" value="Alterar"/>
  
</form>

</div>
@endsection