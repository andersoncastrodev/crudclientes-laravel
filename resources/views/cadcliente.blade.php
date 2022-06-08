@extends('templates.base')

@section('conteudo')


<div class="container">
    
   <form name="formCad" id="formCad" method="POST" action="{{ url("clientecad") }}">
     @csrf
     <p></p>

      <label>Nome:</label>
      <input class="form-control" type="text" name="nome" id="nome" required> <br>

      <label>Endereço:</label>
      <input class="form-control" type="text" name="endereco" id="endereco" required> <br>
      
      <label>Telefone:</label>
      <input class="form-control" type="text" name="telefone" id="telefone" required> <br>

      <input class="btn btn-primary" type="submit" value="Cadastrar" required>
      
    </form>
</div>


@endsection