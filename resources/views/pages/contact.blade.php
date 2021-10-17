@extends('main')

@section('title', '| Contact')

@section('stylesheets')

    <style>
        .contact-brad-weldy {
            margin-bottom: 50px;
        }
        .contact-brad-weldy h2 {
            color: #0f228c;
            color: #333;
            font-size: 33px;
            font-weight: 200;
            text-align: center;
        }
        .contact-brad-weldy h2:last-child {
            color: #333;
        }
    </style>

@endsection

@section('content')

	<?php
/*
	ReCaptcha attempt to fix
		$ch = curl_init();
	
		curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
		    'secret'   => YOUR_RECAPTCHA_SECRET,
		    'response' => USER_RESPONSE_TOKEN,
		]));
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$data = curl_exec($ch);
		
		curl_close($ch);
		
		$response = @json_decode($data);
		
		if ($response && $response->success)
		{
		    // validation succeeded, user input is correct
		    echo('success');
		}
		else
		{
		    // response is invalid for some reason
		    // you can find more in $data->{"error-codes"}
		    echo($data->{"error-codes"});
		}
*/
	?>

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
                    <form id="contact" action="{{ url('contact') }}" method="POST">
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
                        <input type="submit" value="Send Message" class="btn btn-primary g-recaptcha" data-sitekey="6LeHlmEUAAAAALQ07_twuMfcW7AtdjdxPSGKTXwP" data-callback='onSubmit'>
                    </form>
                </div>
            </div>
        </div>

@endsection

@section('scripts')
<script>
	function onSubmit(token) {
		document.getElementById("contact").submit();
	}
</script>
@endsection