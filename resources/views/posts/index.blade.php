<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" >

    </head>
    <body>
       <h1>Blog Name</h1>
       <!--記事一覧のこと-->
       <div class='posts'> 
      <!--/記事一覧の中の1つ1つの記事。ｓなし-->
         @foreach ($posts as $post)
           <div class='post'>
               <!--記事のタイトル-->　
               <h2 class='title'>{{ $post->title }}</h2>
               <!--本文-->
               <p class='body'>{{ $post->body }}</p>
           </div>
         @endforeach
       </div>
       <div class='paginate'>
           {{$posts->links()}}
       </div>
    </body>
</html>