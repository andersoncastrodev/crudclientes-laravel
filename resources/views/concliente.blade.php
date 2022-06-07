@extends('templates.base')

@section('conteudo')

 <div class="container">
   <p></p>
   <table class="table">
      <thead class="thead-dark">
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereco</th>
            <th scope="col">Telefone</th>
          </tr>
      </thead>

      <tbody>
        @foreach($cliente as $cli)
          <tr>
              <th spoce="row"> {{ $cli->id }}</th>
              <td>{{ $cli->nome }}</td>
              <td>{{ $cli->endereco }}</td>
              <td>{{ $cli->telefone }}</td>
              <td> <a href=" {{ url("cliente/$cli->id") }} "> <button class="btn btn-primary"> Editar</button>  </a>  </td>
              <td> <a href=" {{ url("clientedes/$cli->id") }} "> <button class="btn btn-danger"> Deletar</button> </a></td>
          </tr>
        @endforeach
      </tbody>

   </table>  
 </div>
@endsection 