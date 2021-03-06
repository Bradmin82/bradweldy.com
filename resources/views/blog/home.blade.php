@extends('main')

@section('title', '| Homepage')

@section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  <h1 style="font-weight:200;">Brad Weldy Marketing Blog</h1>
                  {{-- <p>Thank you so much for visiting. Test site on Laravel 5.2</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p> --}}
                </div>
            </div>
        </div> <!-- end of header .row -->
        <div class="row">
            <div class="col-md-8 blog-posts-home">
                
                @foreach($posts as $post)

                    <div class="post">
                        <h3>{!! $post->title !!}</h3>
                        <p>{!! substr($post->body, 0, 300) !!}{!! strlen($post->body) > 300 ? "..." : "" !!}</p>
                        <a href="{{ url('blog/' . $post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                    <hr />
                
                @endforeach

            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
                <p>Blah blah blah.</p>
            </div>
        </div>
         <div class="text-center">
          {!! $posts->render(); !!}
         </div>


@endsection