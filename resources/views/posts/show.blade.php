<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <x-app-layout>
    <body>
    　<h2>タイトル</h2>
    　<a href="">{{ $post->record->name }}</a>
    　
      <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>内容</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <a href="/records/{{ $post->record->id }}">{{ $post->record->name }}</a> 
    </body>
    </x-app-layout>
</html>
