@extends('layouts.front')

@section('title')
    Category
@endsection

@section('content')
    <div class="py-5" style="background: url('https://www.teahub.io/photos/full/19-193176_desktop-game-wallpaper-hd.jpg');height:100%;">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-white">All Categories</h2>
                    <div class="row">
                    @foreach($category as $cate)
                            <div class="col-md-3 mb-3 "><!-- ako je status iskljucen prikazat ce-->
                                <a href="{{ url('view-category/'.$cate->slug) }}">   <!-- uzima slug -->
                                <div class="card cardd">
                                    <img src="{{ asset('assets/uploads/category/'.$cate->image) }}" alt="Category image" class="trendingslike">
                                    <div class="card-body" style="background: url('https://cdn.cbeditz.com/cbeditz/preview/blue-gradient-background-wallpapers-58-11614501598qm0t3wuwth.jpg');">
                                        <h5 class="text-white">{{ $cate->name }}  </h5>
                                        <p class="text-white">
                                            {{ $cate->description }}
                                        </p>
                                    </div>
                                </div>
                                </a>
                            </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
