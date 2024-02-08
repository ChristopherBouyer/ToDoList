@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="post">
        @csrf
        @method('put')

        <label for="name">Category Name:</label>
        <input type="text" name="name" value="{{ $category->name }}" required>
        <br>

        <label for="color">Category Color:</label>
        <input type="text" name="color" value="{{ $category->color }}" required>
        <br>

        <button type="submit">Update Category</button>
    </form>
@endsection
