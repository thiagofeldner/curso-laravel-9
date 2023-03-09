@extends('layouts.app')

@section('title', "Editar o Usuário {{ $user->name }}" )

@section('content')

<h1 style="background-color: #4aa9c4;">Editar o Usuário {{ $user->name }}</h1>

@if($errors -> any())
  <ul class="errors">
    @foreach($errors->all() as $error)
      <li class="error">{{ $error }}</li>
    @endforeach
  </ul>

@endif

<form action="{{ route('users.update', $user->id) }}" method="post">
  @method('PUT')
  @csrf
  <input type="text" name="name" value="{{ $user->name }}" placeholder="Nome: ">
  <input type="email" name="email" value="{{ $user->email }}" placeholder="E-mail: ">
  <input type="password" name="password" placeholder="Senha: ">
  <button type="submit">Enviar</button>
</form>

@endsection
