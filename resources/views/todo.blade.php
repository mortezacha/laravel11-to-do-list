<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container">
    <h1 class="text-3xl font-bold underline">
        to do list
    </h1>

    <form class="form" method="POST" action="/create-todo">
        @csrf
        <input type="text" class="input" name="text"/>
        <input type="submit" class="add" value="Add Task"/>
    </form>
    <div class="tasks">
        @foreach($todos as $todo)
        <div class="task" data-id="{{$todo->id}}">
            {{$todo->text}}
            <button type="button" onclick="deleteTodo({{$todo->id}})" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 16 16"><g fill="#f40606"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/><path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/></g></svg>
            </button>

        </div>
        @endforeach
    </div>
    <div class="delete-all">Delete all</div>
</div>
<script src="{{ asset('js/todo.js') }}"></script>
</body>
</html>
