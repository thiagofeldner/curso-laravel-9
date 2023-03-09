
@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
<h1 style="background-color: #4aa9c4;">
  Listagem dos Usuários
  (<a href="{{ route('users.create') }}" >+</a>)
</h1>

<form action="{{ route('users.index') }}" method="get">
  <input style="margin-left: 25px" size="40" type="text" name="search" placeholder="Pesquisar">
  <button>Pesquisar</button>

</form>

<ul>
  @foreach ($users as $user)
    <li>
      {{ $user->name }} -
      {{ $user->email }}
      | <a href=" {{route ('users.edit', $user->id) }} ">Editar</a>
      | <a href=" {{route ('users.show', $user->id) }} ">Detalhes</a>
    </li>
  @endforeach
</ul>

@endsection
