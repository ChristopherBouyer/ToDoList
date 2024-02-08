@extends('layouts.app')

@section('content')
    <h1>Category List</h1>

    <ul>
        @foreach ($categories as $category)
            <li style="background-color: {{ $category->color }}">
                {{ $category->name }}
                
                <!-- Lien pour la modification de la catégorie avec la classe edit-btn -->
                <a href="{{ route('categories.edit', $category->id) }}" class="edit-btn">Edit</a>
                
                <!-- Formulaire pour la suppression de la catégorie -->
                <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display: inline-block;">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    
    <!-- Bouton vert pour créer une catégorie -->
    <a href="{{ route('categories.create') }}" class="create-btn">Create Category</a>

    {{ $categories->links() }}
@endsection
