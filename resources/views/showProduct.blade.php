@extends('layots.main')
@extends('layots.footer')
@extends('layots.head')
@extends('layots.header')
@section('title', 'VictoryHomeMenu')

@section('content')


    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $product->title }}</h1>
                    <p>{{ $product->short_description }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="breakfast-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="lunch-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="{{Voyager::image($product->image)}}" alt="{{ $product->title }}">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2> {{ $product->category->title }} / {{ $product->title }}</h2>


                                        <div class="item col-md-12">
                                            <div class="food-item">

                                                <div class="price">{{ $product->price }} MDL</div>
                                                <div class="text-content">
                                                    <h4>{{ $product->title }}</a> </h4>
                                                    {!! $product->ingredients !!}
                                                </div>
                                            </div>
                                        </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('components.reservation')
@endsection
