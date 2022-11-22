@extends('template.index')

@section('css')
    <link href='style.css' rel='stylesheet' type='text/css'>
@endsection

@section('title')
    {{ $category->name }}
@endsection

@section('content')
    
    <div class="container object">

        <div id="main-container-image">
            
            <section class="work">

                <h1>Les articles de la catégorie <br/>"{{ $category->name}}"
                </h1>

                @foreach ($category->ressource as $ressource)
                    <figure class="white">
                        <a href="{{ Route('ressources.show', ['ressource' => $ressource->id])}}">
                            <img src="img/{{ $ressource->image }}" alt="" />
                            <dl>
                                <dt>{{ $ressource->name }}</dt>
                                <dd>{{ Illuminate\Support\Str::limit($ressource->about), 100, ('...') }}</dd>
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="{{ asset('storage/' . $ressource->category->icon) }}" alt="" width="28" height="28"/></div>
                            <div id="part-info">{{ $ressource->name }}</div>
                        </div>
                    </figure>
                @endforeach
        

            </section>

        </div>

    </div>

@endsection