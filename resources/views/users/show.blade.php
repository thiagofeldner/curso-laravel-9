@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Detalhes do usuário {{ $user->name }}</h1>

<ul>
  <li>{{ $user->name }}</li>
  <li>{{ $user->email }}</li>
</ul>

<form action="{{ route('users.delete', $user->id) }}" method="POST">
  @method('DELETE')
  @csrf
  <button class="shadow mt-3 w-20 h-8 bg-red-500 hover:bg-red-400 text-white rounded" type="submit">Deletar</button>
</form>

@endsection
