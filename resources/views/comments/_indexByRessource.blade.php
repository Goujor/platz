@foreach ($ressource->comments as $comment)
    <div class="post-reply">
        <div class="image-reply-post"></div>
        <div class="name-reply-post">{{ $comment->pseudo}}</div>
        <div class="text-reply-post">{!! $comment->content !!}</div>
    </div>
@endforeach



