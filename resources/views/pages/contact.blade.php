@extends('main')

@section('title', '| Contact')

@section('stylesheets')

    <style>
        .contact-brad-weldy {
            margin-bottom: 50px;
        }
        .contact-brad-weldy h2 {
            font-weight: 200;
            color: #0f228c;
            color: #333;
            font-size: 33px;
            text-align: center;
        }
        .contact-brad-weldy h2:last-child {
            color: #333;
        }
    </style>

@endsection

@section('content')

        <div class="row">
            <div class="col-md-12">
                <h1>Contact</h1>
                <hr />

                <div class="col-md-12 contact-brad-weldy">
                <h2>Brad Weldy Marketing</h2>
                <h2>Helping Your Business Grow</h2>
                </div>

                <div class="col-md-6 my-contact-info">
                    <h2><a href="mailto:BWeldy82@gmail.com">BWeldy82@gmail.com</a></h2>
                    <h2><a href="tel:9494563310">(949)456-3310</a></h2>
                </div>
                <div class="col-md-6">
                    <form action="{{ url('contact') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label name="email">Email:</label>
                            <input id="email" name="email" class="form-control">
                        </div> 
                        <div class="form-group">
                            <label name="subject">Subject:</label>
                            <input id="subject" name="subject" class="form-control">
                        </div> 
                        <div class="form-group">
                            <label name="message">Message:</label>
                            <textarea id="message" name="message" class="form-control" placeholder="How can we help?"></textarea>
                        </div>
                        <input type="submit" value="Send Message" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>

@endsection