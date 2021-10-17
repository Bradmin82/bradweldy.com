@extends('main')

@section('title', '| Web-Dev')

@section('stylesheets')
    
    <style>
        .dev-img {
            margin-bottom: 20px;
        }
        .dev-img img {
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
                <h1 class="the-greet">Web-Development</h1>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">                
                <div class="col-md-6 hp-flash">
                    <p>When you consider that your website never sleeps and it sees more prospects and customers than your entire sales force, you appreciate the significant role website marketing plays in your company's success. Each year the stakes go higher. Based on a competitive website evaluation, we carefully examine the features and tactics that attract, retain and convert visitors into paying customers. We compile this information to prepare website recommendations and determine website optimizing, social media management, and/or conversion goals to track from-the-jump.</p>
                    
                    <p>Digital Marketing is a constantly changing beast. Tactics used two years ago are vastly different from what's happening now. Search engines, especially Google, are in a consistent state of flux in the way in which they perform searches. It's our job to keep a finger on the pulse of how organic search is performed. We take great pride in our work, and we show it off by benchmarking and compiling your website's data from start to finish, improving your ROI with our digital marketing services.</p>
                </div>
                <div class="col-md-5 col-md-offset-1 dev-img">
                    <img style="filter: hue-rotate(145deg);" src="/img/desk.jpg" />
                </div>
            </div>
            <div class="greeting about-services col-xs-12">
                <hr />
                <div class="col-xs-4 service"><h1><a href="/about/marketing">Marketing</a></h1></div>
                <div class="col-xs-4 service"><h1><a href="/about">About</a></h1></div>
                <div class="col-xs-4 service"><h1><a href="/about/seo">SEO</a></h1></div>
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
            
            console.log('You are here, in the console with me!');

        });
    </script>
@endsection