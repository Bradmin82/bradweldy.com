@extends('main')

@section('title', '| SEO')

@section('stylesheets')
    
    <style>
        .seo-img {
            margin-bottom: 20px;
        }
        .seo-img img {
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
                <h1 class="the-greet">SEO</h1>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">                
                <div class="col-md-6 hp-flash">
                    <p>In Orange County, SEO services are plentiful, with over 50 agencies guaranteeing first-page placement within 90-days. But SEO is not a short-term process. It’s an ongoing review and employment of basic principles combined with new trends tested against search engines’ ever-changing litany of rules. Ranking for search requires more than the back-links, page tweaks, and questionable tactics offered by most SEO firms. More and more, it’s the honest, well-written, educational content that drives higher rankings. Google is aware of the formulaic fixes employed by many of these pop-up SEO shops – techniques that will become less and less relevant as Google’s algorithms adapt to informative, well-intentioned web design.</p>
                    <p>One of the most significant benefits of conducting an in-depth evaluation of competitive websites is to discover what tools and techniques are being offered by others in the category. This is for the purpose of helping a client to design a superior and more compelling website, and to utilize those Internet marketing tactics that will be most effective. Based upon a comprehensive evaluation, Brad Weldy Marketing will provide specific website and Internet marketing recommendations.</p>
                </div>
                <div class="col-md-5 col-md-offset-1 seo-img">
                    {{-- <h1>Eloquent.</h1>
                    <h1>Clean.</h1>
                    <h1>Effective.</h1> --}}
<!--                     <img src="/img/seo.jpg" /> -->
						<img src="/img/sitting_on_a_wall_colored_socks.jpg" />
                </div>
            </div>
            <div class="greeting about-services col-xs-12">
                <hr />
                <div class="col-xs-4 service"><h1><a href="/about/marketing">Marketing</a></h1></div>
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