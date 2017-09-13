@extends('main')

@section('title', '| Homepage')

@section('content')

        <div class="row">
            <div class="col-md-12">
                {{-- <div class="greeting grafiti"> --}}
                <div class="greeting">
                    <h1>Eloquent.</h1>
                    <h1>Clean.</h1>
                    <h1>Effective.</h1>
                </div>

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