
@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">
  Listagem dos Usuários
  <a href="{{ route('users.create') }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
</h1>

<form action="{{ route('users.index') }}" method="get" class="py-5">
  <input class="shadow w-80 h-8 mt-3 rounded bg-gray-200" type="text" name="search" placeholder="  Pesquisar">
  <button class="shadow mt-3 w-20 h-8 bg-violet-500 hover:bg-violet-400 text-white rounded">Pesquisar</button>
</form>

  <div class="mt-6">
    <table class="w-full divide-y divide-gray-200">
      <thead class="bg-gray-200">
        <tr>
          <th class="px-6 py-2 text-left text-xs font-medium text-black-300 uppercase tracking-wider">Nome</th>
          <th class="px-6 py-2 text-left text-xs font-medium text-black-300 uppercase tracking-wider">Email</th>
          <th class="px-6 py-2 text-left text-xs font-medium text-black-300 uppercase tracking-wider">Editar</th>
          <th class="px-6 py-2 text-left text-xs font-medium text-black-300 uppercase tracking-wider">Detalhes</th>
          <th class="px-6 py-2 text-left text-xs font-medium text-black-300 uppercase tracking-wider">Comentários</th>
        </tr>
      </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($users as $user)
          <tr>
            <td class="px-6 py-3 text-sm font-medium text-gray-800 whitespace-nowrap">{{ $user->name }}</td>
            <td class="px-6 py-3 text-sm font-medium text-gray-800 whitespace-nowrap">{{ $user->email }}</td>
            <td class="px-6 py-3 text-sm font-medium text-gray-800 whitespace-nowrap">
              <a class="text-green-600 hover:text-green-400 py-2 px-2" href=" {{route ('users.edit', $user->id) }}">
                Editar
              </a>
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <a class="text-orange-600 hover:text-orange-400 py-2 px-2" href=" {{route ('users.show', $user->id) }} ">
                Detalhes
              </a>
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <a class="text-purple-600 hover:text-purple-400 py-2 px-2" href=" {{route ('comments.index', $user->id) }} ">
                Anotações(0)
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
  </div>

@endsection
