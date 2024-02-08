@extends('layouts.app')

@section('content')
    <h1>Création d'un tâche</h1>

    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <label for="name">Nom de la tâche:</label>
        <input type="text" name="name" required>
        <br>

        <label for="date">Date  de la tâche:</label>
        <input type="date" name="date" required>
        <br>

        <label for="category_id">Tâche:</label>
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit">Créer la tâche</button>
    </form>
@endsection
