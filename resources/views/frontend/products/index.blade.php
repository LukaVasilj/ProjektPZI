@extends('layouts.front')

@section('title')
    {{ $category->name }}
@endsection

@section('content')

    <div class="py-3  shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0" >Collections / {{ $category->name }} </h6>
        </div>
    </div>

    <div class="py-5" style="background: url('https://www.teahub.io/photos/full/19-193176_desktop-game-wallpaper-hd.jpg');height:60rem;">
        <div class="container">
            <div class="row">
                <h2 class="text-white"> {{ $category->name }}</h2>
            @foreach($products as $prod)
                    <div class="col-md-3 mb-3">
                        <div class="card cardd" style="height:417px">
                            <a href="{{ url('view-category/'.$category->slug.'/'.$prod->slug) }}">
                            <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product image" class="categoryslike">
                            <div class="card-body" style="background: url('https://cdn.cbeditz.com/cbeditz/preview/blue-gradient-background-wallpapers-58-11614501598qm0t3wuwth.jpg');">
                                <h5 class="text-white">{{ $prod->name }}  </h5>

                            </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

@endsection
