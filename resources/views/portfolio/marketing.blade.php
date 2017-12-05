@extends('main')

@section('title', '| Marketing')

@section('stylesheets')
    
    <style>
        .marketing-img img {
            max-width: 100%;
        }
        .about-services hr {
            margin-bottom: 0px;
        }
    </style>
    
@endsection

@section('content')

        <div class="row">
            <div class="col-md-12">                
                <div class="col-md-12">
                    <h1 class="the-greet">Marketing</h1>
                    <hr />
                </div>
            </div>/
        </div>
        <div class="row">
            <div class="col-md-12">                
                <div class="col-md-6 hp-flash">
                    <h4>Content marketing strategies that build brands and reward loyalty.</h4>
                    <p>Basically, content marketing is the art of communicating with your customers and prospects without selling. It is non-interruption marketing. Instead of pitching your products or services, you are delivering information that makes your buyer more intelligent. The essence of this content strategy is the belief that if we, as businesses, deliver consistent, ongoing valuable information to buyers, they ultimately reward us with their business and loyalty.</p>
 
                    <h4>Analytics we use to produce and report superior digital results.</h4>
                    <p>Brad Weldy Marketing began building websites in 2012 and began developing natural and paid search programs to drive traffic in 2013. Over the past five years we continue to invest in our knowledge and tools required to achieve superior results from Internet marketing. Below are the software tools we use currently to achieve superior results.</p>
                </div>
                <div class="col-md-5 col-md-offset-1 marketing-img">
                    {{-- <h1>Eloquent.</h1>
                    <h1>Clean.</h1>
                    <h1>Effective.</h1> --}}
                    <img src="/img/Marketing_Plan.jpg" />
                </div>
            </div>
            <div class="greeting about-services col-xs-12">
                <hr />
                <div class="col-xs-4 service"><h1><a href="/about/seo">SEO</a></h1></div>
                <div class="col-xs-4 service"><h1><a href="/about">About</a></h1></div>
                <div class="col-xs-4 service"><h1><a href="/about/web-dev">Web-Dev</a></h1></div>
            </div>
            <div class="col-md-12 bw-cta">
                <div class="jumbotron home-title-jumbo">
                  <h1>Brad Weldy Marketing</h1>
                  <p><a class="btn btn-primary btn-lg" href="/contact" role="button">Get Started</a></p>
                </div>
            </div>

            {{-- <div class="top-right-corner-img">
                <img src="/img/pencil.jpg" />
                <div class="gradient"></div>
            </div> --}}

        </div> <!-- end of header .row -->

@endsection

@section('scripts')
    <script>
        $(function() {
            
            console.log('Bonus: jQuery is here!');

        });
    </script>
@endsection