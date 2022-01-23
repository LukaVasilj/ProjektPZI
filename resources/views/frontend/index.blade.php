@extends('layouts.front')

@section('title')
    Welcome to Online Shop
@endsection

@section('content')
    @include('layouts.inc.slider')
<div style="background: url('https://wallpaperaccess.com/full/1957854.jpg')">
    <div class="py-5" >
        <div class="container " >
            <div class="row">
                <h1 class="font3 text-white">Featured Products</h1>
                <div class="owl-carousel featured-carousel owl-theme" >

                @foreach($featured_products as $prod)   <!--izbacit ce samo ko ima oznacen trending-->
                    <div class="item ">

                        <div class="card " >
                            <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product image" class="categoryslikee">
                            <div class="card-body" style="background: url('https://cdn.cbeditz.com/cbeditz/preview/blue-gradient-background-wallpapers-58-11614501598qm0t3wuwth.jpg');">
                                <h5 class="font2 text-white">{{ $prod->name }}  </h5>
                                <span class="float-start text-white">Selling Price: {{ $prod->selling_price }} $</span>
                                <span class="float-end text-white"><s>Original Price:{{ $prod->original_price }} $</s></span>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h1 class="font3 text-white">Trending Category</h1>
                <div class="owl-carousel featured-carousel owl-theme">

                @foreach($trending_category as $tcategory)   <!--izbacit ce samo ko ima oznacen popular-->
                    <div class="item">
                        <a href="{{ url('view-category/'.$tcategory->slug) }}">
                        <div class="card">
                            <img src="{{ asset('assets/uploads/category/'.$tcategory->image) }}" alt="Product image" class="trendingslike">
                            <div class="card-body" style="background: url('https://cdn.cbeditz.com/cbeditz/preview/blue-gradient-background-wallpapers-58-11614501598qm0t3wuwth.jpg');">
                                <h5 class="font2 text-white">{{ $tcategory->name }}  </h5>
                                <p class="text-white">
                                    {{ $tcategory->description }}
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
    <div class="py-4" style="background: url('https://cdn.wallpapersafari.com/26/31/2oJ06z.jpg')">
    <div class="container p-4">
        <div class="row">
            <div class="col-md-5 ">
                <img src="{{ asset('assets/images/jojstick1.png') }}" class="circular--square slikaresponsive" alt="..." >

            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-6 mt-3">
            <h1 class="font2 text-white box1">PC Games</h1>
                <h4 class="text-white font4 mt-5 box1 ">Osobna računalna igra, također poznata kao PC igra ili računalna igra, vrsta je videoigre koja se igra na osobnom računalu (PC), a ne na konzoli za video igre ili arkadnom stroju. Njegove definirajuće karakteristike uključuju: raznovrsniji hardver i softver za igranje koje određuje korisnik; i općenito veći kapacitet u ulazu, obradi, video i audio izlazu. Nekoordinirana priroda tržišta PC igara, a sada i nedostatak fizičkih medija, otežavaju preciznu procjenu njegove veličine. U 2018., globalno tržište igara za računala procijenjeno je na oko 27,7 milijardi dolara.</h4>
            </div>
        </div>
    </div>
    </div>
    <div class="py-4" style="background: url('https://cdn.wallpapersafari.com/26/31/2oJ06z.jpg')">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-6 mt-3" >
                    <iframe class="iframe" src="https://www.youtube.com/embed/Vl-MZXYvjhw">
                    </iframe>

                </div>


            </div>
        </div>
    </div>
    <div class="py-4 " style="background: url('https://cdn.wallpapersafari.com/26/31/2oJ06z.jpg')">
    <div class="container p-4 mt-3" >
        <div class="row">
            <div class="col-md-6 mt-3">
                <h1 class="font2 text-white box1">Projekt PZI</h1>
                <h4 class="text-white font4 box1">U ovom projektu napravili smo kupovinu PC igara preko interneta.<a href="http://shorturl.at/bsO12" style="color:yellow;">Link od vizije</a></h4>

            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/images/slika2.jpg') }}" class="circular--square slikaresponsive" alt="..." style="weight:150px;height:330px;">
        </div>
    </div>
    </div>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-facebook-f"></i
                    ></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-twitter"></i
                    ></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-google"></i
                    ></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-instagram"></i
                    ></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-linkedin-in"></i
                    ></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-github"></i
                    ></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example21" class="form-control" />
                                <label class="form-label" for="form5Example21">Email address</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light mb-4">
                                Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                    repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                    eum harum corrupti dicta, aliquam sequi voluptate quas.
                </p>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->

                    <div class="col-lg-2 col-md-3 mb-4 mb-md-0">
                        <img src="{{ asset('assets/images/html.png') }}" class=" " alt="..." style="">
                    </div>
                    <div class="col-lg-2 col-md-3 mb-4 mb-md-0">
                        <img src="{{ asset('assets/images/css.png') }}" class=" " alt="..." style="">
                    </div>
                    <div class="col-lg-2 col-md-3 mb-4 mb-md-0">
                        <img src="{{ asset('assets/images/js.png') }}" class=" " alt="..." style="">
                    </div>
                    <div class="col-lg-2 col-md-3 mb-4 mb-md-0">
                        <img src="{{ asset('assets/images/php.png') }}" class=" " alt="..." style="">
                    </div>
                    <div class="col-lg-2 col-md-3 mb-4 mb-md-0">
                        <img src="{{ asset('assets/images/jq.png') }}" class=" " alt="..." style="">
                    </div>
                    <div class="col-lg-2 col-md-3 mb-4 mb-md-0">
                        <img src="{{ asset('assets/images/bootstrap.png') }}" class=" " alt="..." style="">
                    </div>


                        <div class="col-md-5 mt-5">
                            <img src="{{ asset('assets/images/166.jpg') }}" class="circular--square" alt="..." style="width:11.5rem;height:20rem;">
                            <p class="font2">Luka Vasilj</p>
                        </div>


                        <div class="col-md-5 mt-5">
                            <img src="{{ asset('assets/images/martincegos.jpeg') }}" class="circular--square" alt="..." style="width:15rem;height:20rem;">
                            <p class="font2">Martin Matija Buntić</p>
                        </div>


                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
@endsection

@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
</script>
@endsection
