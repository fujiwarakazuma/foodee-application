<x-app-layout>
    
    @foreach($posts as $post)
        <div>
            <h2><a href="{{ route('posts.show', $post) }}">{{ $post->store }}</a></h2>
            <p>{{ $post->body }}</p>
            <p>{{ $post->likes_count }} likes</p>
            <a href="{{ route('posts.show', $post) }}">View Post</a>
        </div>
    @endforeach
    
</x-app-layout>