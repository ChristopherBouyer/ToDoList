@extends('layouts.app')

@section('content')
    <h1>Create Task</h1>

    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <label for="name">Task Name:</label>
        <input type="text" name="name" required>
        <br>

        <label for="date">Task Date:</label>
        <input type="date" name="date" required>
        <br>

        <label for="category_id">Category:</label>
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit">Create Task</button>
    </form>
@endsection
