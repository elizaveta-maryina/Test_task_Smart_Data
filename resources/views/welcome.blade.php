<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
    <head>
        <link href="https://replit.com/@IelizavietaMari/Testtask#resources/css/app.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Тестовое задание</title>
         <h1>Реестр книг</h1>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>

      <style type="text/css">
        body {

        font-family: "Muller", sans-serif;

        background-color: #e5e5e5;
        }

        a {
        color: inherit;
        text-decoration: none;
        }
        html {
          box-sizing: border-box;
        }
        nav {
        justify-content: space-around;
        
        } 
        div {
        display: inline-block;
        padding: 0px 45px 0px 0px;
        }
        
      a {
        display: inline-block;
        color: #666;
        font-size: 16px;
        line-height: 1;
        
        justify-content: space-around;
        outline: none;
      }


      </style>
          <nav>
          <div><a href="{{route('welcome-form')}}">Main</a></div>
          <div><a href="{{route('form_authors-form')}}">Form</a> </div>
          <div><a href="{{route('author.index')}}">Authors</a> </div>
          <div><a href="{{route('book.index')}}">Books</a></div>
          <a href="{{route('list-form')}}">Update</a>
          </nav>
                              
    </body>
</html>
