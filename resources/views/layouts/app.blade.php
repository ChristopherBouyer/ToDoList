<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('tasks.index') }}">Liste des tâches</a></li>
            <li><a href="{{ route('categories.index') }}">Liste des catégories</a></li>
        </ul>
    </nav>

    @yield('content')
</body>
</html>
