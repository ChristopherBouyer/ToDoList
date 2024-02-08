@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="post">
        @csrf
        @method('put')

        <label for="name">Task Name:</label>
        <input type="text" name="name" value="{{ $task->name }}" required>
        <br>

        <label for="date">Task Date:</label>
        <input type="date" name="date" value="{{ $task->date }}" required>
        <br>

        <label for="category_id">Category:</label>
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id === $task->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <br>

        <button type="submit">Update Task</button>
    </form>
@endsection
