@extends('templates.base')

@section('conteudo')

<div class="container">
    
   <form name="formCad" id="formCad" method="POST" action="{{ url("clientecad") }}">
     @csrf
     <p></p>

      <label>Nome:</label>
      <input class="form-control" type="text" name="nome" id="nome" require> <br>

      <label>Endereço:</label>
      <input class="form-control" type="text" name="endereco" id="endereco" require> <br>
      
      <label>Telefone:</label>
      <input class="form-control" type="text" name="telefone" id="telefone" require> <br>

      <input class="btn btn-primary" type="submit" value="Cadastrar" required>
      
    </form>

</div>

@endsection