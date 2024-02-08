@extends('layouts.app')

@section('content')
    <h1>Create Category</h1>

    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <label for="name">Category Name:</label>
        <input type="text" name="name" required>
        <br>

        <label for="color">Category Color:</label>
        <input type="text" name="color" required>
        <br>

        <button type="submit">Create Category</button>
    </form>
@endsection
