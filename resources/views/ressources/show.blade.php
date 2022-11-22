@extends('template.index')

@section('css')
    @include('template.partials._css_details')
@endsection

@section('title')
    {{ $ressource->name}}
@endsection

@section('content')


    <div class="container object">

        <div id="main-container-image">

            <div class="title-item">
                <div class="title-icon"><img src="{{ asset('storage/' . $ressource->category->icon) }}" alt=""></div>
                <div class="title-text">{{ $ressource->name }} </div>
                <div class="title-text-2">{{ $ressource->created_at->format('M d, Y') }} by {{ $ressource->user->name }}</div>
            </div>

            <div class="work">
                <figure class="white">
                        <img src="img/{{ $ressource->image }}" alt="" />
                </figure>

                <div class="wrapper-text-description">


                    <div class="wrapper-file">
                        <div class="icon-file"><img src="{{ asset('storage/' . $ressource->category->icon) }}" alt="" width="21" height="21"/></div>
                        <div class="text-file"> {{ $ressource->category->name }} </div>
                    </div>

                    <div class="wrapper-weight">
                        <div class="icon-weight"><img src="img/icon-weight.svg" alt="" width="20" height="23"/></div>
                        <div class="text-weight">Mo</div>
                    </div>
                    <div class="wrapper-desc">
                        <div class="icon-desc"><img src="img/icon-desc.svg" alt="" width="24" height="24"/></div>
                        <div class="text-desc">{!! $ressource->about !!}</div>
                    </div>

                    <div class="wrapper-download">
                        <div class="icon-download"><img src="img/icon-download.svg" alt="" width="19" height="26"/></div>
                        <div class="text-download"><a href="./storage/files/afficheLocal.pdf" target="_blank"><b>Download</b></a></div>
                    </div>
                    
                    @include('ressources._indexByRessource', ['ressources' =>\App\Models\Ressource::orderBy(DB::raw('RAND()'))
                    ->where('categorie_id', $ressource->category->id )
                    ->take(4)
                    ->get()
                    ])

                </div> 

                @include('template.partials._comments')
                
            </div>
        </div>
    </div>
@endsection