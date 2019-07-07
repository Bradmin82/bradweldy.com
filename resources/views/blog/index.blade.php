@extends('main')

@section('title', '| Blog')

@section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  <h1 style="font-weight:200; margin-top: 10px;">Brad Weldy Marketing Blog</h1>
                </div>
            </div>
        </div> <!-- end of header .row -->
        <div class="row">
          <div class="col-md-12">
              <div class="col-md-8 blog-posts-home">
                  
                  @foreach($posts as $post)

                      <div class="row post">
                        <div class="col-xs-12 col-md-8">      
                            <h3>{!! $post->title !!}</h3>

                            <p>{!! substr($post->body, 0, 275) !!}{!! strlen($post->body) > 275 ? "..." : "" !!}</p>
                            <a href="{{ url('blog/' . $post->slug) }}" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="col-xs-12 col-md-4 blog-index-img">
                          <?php if($post->image) { ?>
                            <img src="{{ asset('images/' . $post->image) }}" style="width: 100%;" />
                          <?php } ?>
                        </div>
                      </div>
                      <hr style="border-top: 1px solid #333;" />
                  
                  @endforeach
                  
              {{-- DO NOT ADD '<div>' tags to blog posts. Closing div tag missing, or one to many --}}
               
               </div>
              
              <div class="col-md-3 col-md-offset-1 blog-posts-home-side">
                  <h2>Page {!! $currentPage  = isset($_GET['page']) ? (int) $_GET['page'] : 1 !!}</h2>
                  <p>Posts: {!! count($posts) !!}</p>
                  <hr>
                  <br />

                  <a class="twitter-timeline" data-height="700" href="https://twitter.com/bradweldymrktng?ref_src=twsrc%5Etfw">Tweets by bradweldymrktng</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

              </div>
          </div>
        </div>
         <div class="text-center">
          {!! $posts->render(); !!}
         </div>


@endsection