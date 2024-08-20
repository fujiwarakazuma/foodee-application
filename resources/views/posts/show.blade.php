<x-app-layout>

        <h1 class="user">{{$post->user->name}}</h1>

    <h2 class="title">
            {{ $post->store }}
    </h2>
    <div class="content">
        <div class="content__post">
            <p>{{ $post->body }}</p>    
        </div>
    </div>
    {{ $post->category->category }}
    {{ $post->region->region }}
    
    <!--<div class="edit">-->
    <!--    <a href="/posts/{{$post->id}}/edit">edit</a>-->
    <!--</div>-->
    @foreach ($comments as $comment)
        <div>
            <p>{{ $comment->comment }}</p>
            <p>by {{$comment->user->name}}</p>
            <p>{{$comment->created_at}}</p>
        </div>
    @endforeach
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
    <p>{{ $post->likes_count }} likes</p>
    <div class="footer">
        <a href="{{route('posts.index')}}">戻る</a>
    </div>
</x-app-layout>