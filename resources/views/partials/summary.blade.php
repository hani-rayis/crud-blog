<div class="content">

    <a href="{{ route('posts.show', [$post->slug]) }}">
        <h3 class="title">{{ $post->title }}</h3>
    </a>
    <p><b>Posted:</b> {{ $post->created_at->diffForHumans() }}</p>
    <p><b>Category:</b> {{ $post->category }}</p>
    <p>{!! nl2br(e($post->content)) !!}</p>

    <form method="post" action="{{ route('posts.destroy', $post) }}">
        @csrf
        @method('delete')
        <div class="form-group">
            <div class="control">
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-success">
                    Edit
                </a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        
        </div>
    </form>

</div>
