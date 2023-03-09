@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')
<h1 style="background-color: #4aa9c4;">Listagem do usuário {{ $user->name }}</h1>

<ul>
  <li>{{ $user->name }}</li>
  <li>{{ $user->email }}</li>
</ul>

@endsection
