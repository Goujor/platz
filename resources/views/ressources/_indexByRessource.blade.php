<div class="wrapper-morefrom">
    <div class="text-morefrom">More from {{ $ressource->category->name}}</div>
    <div class="image-morefrom">
        @foreach ($ressources as $ressource)
            <a href="{{ Route('ressources.show', ['ressource' => $ressource->id])}}"><div class="image-morefrom-1"><img src="img/{{ $ressource->image }} " alt="" width="430" height="330"/></div></a>
        @endforeach
    </div>
</div>