@extends('layouts.app')

@section('content')
    <h1>Modification de la tâche</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="post">
        @csrf
        @method('put')

        <label for="name">Nom de la tâche:</label>
        <input type="text" name="name" value="{{ $task->name }}" required>
        <br>

        <label for="date">Date de la tâche:</label>
        <input type="date" name="date" value="{{ $task->date }}" required>
        <br>

        <label for="category_id">Tâche:</label>
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id === $task->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <br>

        <button type="submit">Modifier la tâche</button>
    </form>
@endsection
