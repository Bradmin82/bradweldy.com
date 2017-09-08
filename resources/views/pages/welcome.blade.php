@extends('main')

@section('title', '| Homepage')

@section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  <h1>Welcome to my Blog!</h1>
                  <p>Thank you so much for visiting. Test site on Laravel 5.2</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
            </div>
        </div> <!-- end of header .row -->
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Blah blah blah Lorem ipsum</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr />
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Blah blah blah Lorem ipsum</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr />
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Blah blah blah Lorem ipsum</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr />
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Blah blah blah Lorem ipsum</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr />
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
                <p>Blah blah blah.</p>
            </div>
        </div>


@endsection