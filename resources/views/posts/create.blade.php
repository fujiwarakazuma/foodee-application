<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>foodee</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="" method="POST">
          @csrf
          <div class="store">
            <h2>Store</h2>
            <input type="text" name="post[store]" placeholder="Edit store" >
            
          </div>
          <div class="place">
            <h2>Region</h2>
            <input type="text" name="post[region]" placeholder="Edit region" >
            
          </div>
          <div class="category">
            <h2>Category</h2>
            <input type="text" name="post[category]" placeholder="Edit category" >
            
          </div>
          <div class="body">
            <h2>Comment</h2>
            <input type="textarea" name="post[body]" placeholder="Edit comment" >
             
          </div>
          <input type="submit" value="Post">
        </form>
    </body>
</html>