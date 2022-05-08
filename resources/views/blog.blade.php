@extends('layots.main')
@extends('layots.footer')
@extends('layots.head')
@extends('layots.header')
@section('title', 'VictoryHomePage')

@section('content')
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Blog</h1>
                    <p>You can feel free to use our template for any purpose of your websites. Thank you. Template re-distribution is <strong>not allowed</strong> in any download site.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-page">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-8 col-md-offset-2">
                        <div class="blog-item">
                            <img src="{{Voyager::image($blog->image)}}" alt="{{ $blog->title }}">
                            <div class="date">{{ $blog->date }}</div>
                            <div class="down-content">
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




                <div class="col-md-8 col-md-offset-2">
                    <ul class="page-number">
                        <li>{{ $blogs->links() }}</li>
                    </ul>
                </div>
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
