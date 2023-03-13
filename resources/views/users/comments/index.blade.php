
@extends('layouts.app')

@section('title', "Comentários do Usuário {$user->name}")

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">
  Comentários do Usuário {{ $user->name }}
  <a href="{{ route('comments.create', $user->id) }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
</h1>

<form action="{{ route('users.index') }}" method="get" class="py-5">
  <input class="shadow w-80 h-8 mt-3 rounded bg-gray-200" type="text" name="search" placeholder="  Pesquisar">
  <button class="shadow mt-3 w-20 h-8 bg-violet-500 hover:bg-violet-400 text-white rounded">Pesquisar</button>
</form>

  <div class="mt-6">
    <table class="w-full divide-y divide-gray-200">
      <thead class="bg-gray-200">
        <tr>
          <th class="px-6 py-2 text-left text-xs font-medium text-black-300 uppercase tracking-wider">Conteúdo</th>
          <th class="px-6 py-2 text-left text-xs font-medium text-black-300 uppercase tracking-wider">Visível</th>
          <th class="px-6 py-2 text-left text-xs font-medium text-black-300 uppercase tracking-wider">Editar</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($comments as $comment)
          <tr>
            <td class="px-6 py-3 text-sm font-medium text-gray-800 whitespace-nowrap">{{ $comment->body }}</td>
            <td class="px-6 py-3 text-sm font-medium text-gray-800 whitespace-nowrap">{{ $comment->visible ? 'SIM' : 'NÃO' }}</td>
            <td class="px-6 py-3 text-sm font-medium text-gray-800 whitespace-nowrap">
              <a class="text-green-600 hover:text-green-400" href=" {{route ('users.edit', $user->id) }}">
                Editar
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
