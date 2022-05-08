@extends('layots.main')
@extends('layots.footer')
@extends('layots.head')
@extends('layots.header')
@section('title', 'VictoryHomePage')

@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4>Here you can find delecious foods</h4>
                    <h2>Asian Restaurant</h2>
                    <p>
                        {{ setting('site.description') }}
                    </p>
                    <div class="primary-button">
                        <a href="#" class="scroll-link" data-id="book-table">Order Right Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="first-image">
                        <img src="img/cook_01.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cook-content">
                        <h4>We cook delecious</h4>
                        @foreach ($tel as $item )
                        <div class="contact-content">
                            <span>You can call us on:</span>
                            <h6>{{ $item->telefon }}</h6>
                        </div>
                        @endforeach

                        <span>or</span>
                        <div class="primary-white-button">
                            <a href="#" class="scroll-link" data-id="book-table">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="second-image">
                        <img src="img/cook_02.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="services">
        <div class="container">
            <div class="row">
                @foreach ($categories as $category )
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <a href="{{ route('showCategory',[$category->slug]) }}">
                            <img src="{{Voyager::image($category->image)}}" alt="Breakfast">
                            <h4>{{ $category->title }}</h4>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

        @include('components.reservation')

    <section class="get-app">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Get our menu for your phone</h2>
                </div>


                <div class="primary-white-button">
                    @foreach ($pdf as $item)
                    <a href="#">Download now</a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>



    <section class="featured-food">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Weekly Featured Food</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4">
                        <div class="food-item">
                            <h2>{{ $category->title }}</h2>
                            @foreach ($category->products as $product)

                                @if ($product->weekly ==1)
                                    <img src="{{Voyager::image($product->image)}}" alt="{{ $product->title }}">
                                    <div class="price">${{ $product->price }}</div>
                                    <div class="text-content">
                                        <h4>{{ $product->title }}</h4>
                                        <p>{{ $product->short_description}}...</p>
                                    </div>
                                    @break
                                @endif

                            @endforeach

                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>



    <section class="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Our blog post</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="{{Voyager::image($blog->image)}}" alt="">
                        <div class="date">{{ $blog->date }}</div>
                        <div class="right-content">
                            <h4>{{ $blog->title }}</h4>
                            <span>Branding / Admin</span>
                            <p>{{ $blog->short_description }}</p>
                            <div class="text-button">
                                <a href="{{ route('showBlog',[$blog->slug]) }}">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>



    <section class="sign-up">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Signup for our newsletters</h2>
                    </div>
                </div>
            </div>
            <form id="contact" action="" method="get">
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                        <fieldset>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Enter your email here..." required="">
                        </fieldset>
                    </div>
                    <div class="col-md-2">
                        <fieldset>
                            <button type="submit" id="form-submit" class="btn">Send Message</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection

