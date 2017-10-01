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
        }
        @media(max-width: 1024px) {
            .hp-flash h1:first-child {
                display: none;
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
                <div class="col-md-5 greeting">
                    <h1>Eloquent.</h1>
                    <h1>Clean.</h1>
                    <h1>Effective.</h1>
                </div>
                <div class="col-md-6 col-md-offset-1 hp-flash">
                    <h1><br /></h1>
                    <h1 class="the-greet">Marketing</h1>
                </div>

            </div>
            <div class="col-md-12">
                <div class="jumbotron home-title-jumbo">
                  <h1>Brad Weldy Marketing</h1>
                  <p><a class="btn btn-primary btn-lg" href="/auth/register" role="button">Get Started</a></p>
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
            var greetingFlash = ['Marketing', 'Web-Dev', 'SEO'];
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

        });
    </script>
@endsection