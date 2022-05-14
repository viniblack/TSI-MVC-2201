@extends('layouts.externo')
@section('title', 'Listar clientes')
@section('sidebar')
@parent
<hr>
@endsection
@section('content')

<table class="table">
    <tr>
      <td>ID</td>
      <td>Nome</td>
      <td>Endereço</td>
      <td>Telefone</td>
      <td>E-mail</td>
    </tr>
    @foreach($clientes as $cliente)
    <tr>
        <td>{{$cliente->id}}</td>
        <td>{{$cliente->nome}}</td>
        <td>{{$cliente->endereco}}</td>
        <td>{{$cliente->telefone}}</td>
        <td>{{$cliente->email}}</td>
    </tr>
    @endforeach
</table>
@endsection
