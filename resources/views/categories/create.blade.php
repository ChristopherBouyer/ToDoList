@extends('layouts.app')

@section('content')
    <h1>Créer une catégorie</h1>

    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <label for="name">Nom de la catégorie:</label>
        <input type="text" name="name" required>
        <br>

        <label for="color">Couleur d ela catégorie:</label>
        <input type="text" name="color" required>
        <br>

        <button type="submit">Créer la catégorie</button>
    </form>
@endsection
