@extends('main')

@section('title', '| Homepage')

@section('stylesheets')

    <style>
        .hp-flash h1 {
            font-size: 88px;
            font-weight: 200;
            /*color: #e7e7e7;
            color: #0f228c;*/
            margin: 50px 0px;
            padding-top: 150px;
        }
        @media(max-width: 991px) {
            .hp-flash h1 {
                padding-top: 0px;
            }
            .hp-flash .the-greet {
                font-size: 66px;
                text-align: center;
            }
        }

    </style>

    {{-- <script>
        $(function() {
          $('.hp-flash h1').delay(2000).fadeOut(500).fadeIn(500);
        });
    </script> --}}
    
@endsection

@section('content')

        <div class="row">
            <div class="col-md-12">
                {{-- <div class="greeting grafiti"> --}}
                <div class="col-md-4 greeting texture-1 masked-copy">
                    <h1>Eloquent.</h1>
                    <h1>Clean.</h1>
                    <h1>Effective.</h1>
                </div>
                <div class="col-md-6 col-md-offset-2 hp-flash">
                    <h1 class="the-greet"></h1>
                </div>

            </div>
            <div class="col-md-12">
                <div class="jumbotron home-title-jumbo">
                  <h1>Brad Weldy Marketing</h1>
                  {{-- <p><a class="btn btn-primary btn-lg" href="/auth/register" role="button">Get Started</a></p> --}}
                  <p><a class="btn btn-primary btn-lg" href="/contact" role="button">Get Started</a></p>
                </div>
            </div>

            <div class="top-right-corner-img">
                <img src="/img/pencil.jpg" />
                <div class="gradient"></div>
            </div>

        </div> <!-- end of header .row -->

@endsection

@section('scripts')
    <script>
        $(function() {
            
            var hpFlash = $('.hp-flash');

            var timeout = 3000;
            var greetingFlash = ['<a href="/about/marketing">Marketing</a>', '<a href="/about/web-dev">Web-Dev</a>', '<a href="/about/seo">SEO</a>'];
            //, 'I  &#10084; Michelle'
            var index = 0;
            var action = function() {
                if(hpFlash.is(':hover'))
                    return;

                var greet = greetingFlash[index];

                $('.hp-flash .the-greet').fadeOut('slow', function() {
                    $('.hp-flash .the-greet').html(greet);
                }).fadeIn('fast');

                if(++index >= greetingFlash.length)
                    index = 0;        
            };
            setInterval(action, timeout);
            action();
            
            if(navigator.userAgent.indexOf("Chrome") != -1 ){
	            $('.masked-copy').addClass('texture-1-animate');
	        }
	        else if(navigator.userAgent.indexOf("Safari") != -1){
	            $('.greeting').removeClass('masked-copy texture-1');
	        }
	        else if(navigator.userAgent.indexOf("Firefox") != -1 ){
	             return;
	        }
        });
    </script>
@endsection