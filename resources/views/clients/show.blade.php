@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2> Dados do cliente</h2>
    </div>

    <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('clients.index') }}"> Voltar</a>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Nome:</strong>

      {{ $cliente->nome }}

    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Email:</strong>

      {{ $cliente->email }}

    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Endereço:</strong>

      {{ $cliente->endereco }}

    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Telefone:</strong>

      {{ $cliente->telefone }}

    </div>
  </div>
</div>

@endsection