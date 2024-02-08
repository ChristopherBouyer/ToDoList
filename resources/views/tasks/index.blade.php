@extends('layouts.app')

@section('content')
    <h1>Task List</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->name }} - {{ $task->date }} - {{ $task->category->name }}
                <a href="{{ route('tasks.edit', $task->id) }}" class="edit-btn">Edit</a>
                
                <!-- Formulaire pour la suppression de la tâche -->
                <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline-block;">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('tasks.create') }}" class="create-btn">Create Task</a>
    
    {{ $tasks->links() }}
@endsection
