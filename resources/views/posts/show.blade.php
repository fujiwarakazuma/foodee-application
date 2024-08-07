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
    @if ($post->likes()->where('user_id', auth()->id())->exists())
        <form action="{{ route('likes.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Unlike</button>
        </form>
    @else
        <form action="{{ route('likes.store', $post) }}" method="POST">
            @csrf
            <button type="submit">Like</button>
        </form>
    @endif
    <form action="{{ route('comments.store', $post) }}" method="POST">
        @csrf
        <textarea name="comment" required></textarea>
        <button type="submit">Comment</button>
    </form>
    @foreach ($post->comments as $comment)
        <div>
            <p>{{ $comment->body }}</p>
            <p>by {{ $comment->user->name }}</p>
        </div>
    @endforeach
    <div class="footer">
        <a href="{{route('posts.index')}}">戻る</a>
    </div>
</x-app-layout>