@extends('layouts.app')

@section('content')
    <h1>Liste des tâches</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->name }} - {{ $task->date }} - {{ $task->category->name }}
                <a href="{{ route('tasks.edit', $task->id) }}" class="edit-btn">Modifer</a>
                
                <!-- Formulaire pour la suppression de la tâche -->
                <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline-block;">
                    @csrf
                    @method('delete')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('tasks.create') }}" class="create-btn">Créer une tâche</a>
    
    {{ $tasks->links() }}
@endsection
