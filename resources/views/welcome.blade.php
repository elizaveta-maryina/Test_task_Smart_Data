<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Тестовое задание</title>
         <h1>Реестр книг</h1>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <div>
          <nav>
          <a href="{{route('welcome-form')}}">Главная></a>
          <a href="{{route('form_authors-form')}}">Форма></a>
          <a href="{{route('author.index')}}">Список авторов></a>
          <a href="{{route('book.index')}}">Список книг с указанием автора></a>
          <a href="{{route('list-form')}}">Список книг></a>
          </nav>
        </div>
                              
    </body>
</html>
