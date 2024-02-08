@extends('layouts.app')

@section('content')
    <h1>Modifier une catégorie</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="post">
        @csrf
        @method('put')

        <label for="name">Nom de la catégorie:</label>
        <input type="text" name="name" value="{{ $category->name }}" required>
        <br>

        <label for="color">Couleur de la catégorie:</label>
        <input type="text" name="color" value="{{ $category->color }}" required>
        <br>

        <button type="submit">Modifier catégorie</button>
    </form>
@endsection
