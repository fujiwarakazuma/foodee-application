<x-app-layout>
    <h1 class="title">
            {{ $post->store }}
    </h1>
    <div class="content">
        <div class="content__post">
            <p>{{ $post->body }}</p>    
        </div>
    </div>
    <!--<a href="">{{ $post->category->category }}</a>-->
    {{ $post->category->category }}
    {{ $post->region->region }}
    
    <!--<div class="edit">-->
    <!--    <a href="/posts/{{$post->id}}/edit">edit</a>-->
    <!--</div>-->
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>