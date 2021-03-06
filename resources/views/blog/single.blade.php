@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')

  <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php if($post->image) { ?>
          <img src="{{ asset('images/' . $post->image) }}" height="400" width="800" style="height: auto; max-width: 100%;" />
        <?php } ?>
        <h1>{{ $post->title }}</h1>
        <p class="lead">{!! $post->body !!} </p>
        <hr />
        <p>Posted In: {{ $post->category->name }}</p>



<!--         <p class="lead">This is a Brad Weldy blog post</p> -->
      </div>

  </div> <!-- End .row -->

  <div class="row">
  		<div class="col-md-8 col-md-offset-2">
      <h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>{{ $post->comments()->count() }} Comments</h3>
  		@foreach($post->comments as $comment)
    		<div class="comment">	
          <div class="author-info">  
              <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="author-image" />
              <div class="author-name"> 
                 <h4>{{ $comment->name }}</h4>
                 <p class="author-time">{{ date('F nS, Y - g:i A' ,strtotime($comment->created_at)) }}</p>
              </div>
    			</div>
          <div class="comment-content">   
             {{ $comment->comment }}
          </div>   
  			</div>
  		@endforeach
  		</div>
  </div>

  <div class="row">
	  <div id="comment-form" class="col-md-8 col-md-offset-2">
<!--
	  		{!! Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST', 'id' => 'comment']) !!}

	  			<div class="row">
	  				<div class="col-md-6">
		  				{!! Form::label('name', "Name:") !!}
		  				{!! Form::text('name', null, ['class' => 'form-control']) !!}
	  				</div>
	  				<div class="col-md-6">
		  				{!! Form::label('email', "Email:") !!}
		  				{!! Form::text('email', null, ['class' => 'form-control']) !!}
	  				</div>
	  				<div class="col-md-12">
	  					{!! Form::label('comment', "Comment:") !!}
	  					{!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) !!}

						
	  				</div>
	  			</div>

	  		{!! Form::close() !!}
-->
	  </div>
  </div>
<!-- <input type="submit" value="Add Comment" class="btn btn-success btn-block form-spacing-top g-recaptcha" data-sitekey="6LeHlmEUAAAAALQ07_twuMfcW7AtdjdxPSGKTXwP" data-callback='onSubmit'> -->

<!-- {!! Form::submit('Add Comment', ['class' => 'btn btn-success btn-block form-spacing-top g-recaptcha', 'data-sitekey' => '6LeHlmEUAAAAALQ07_twuMfcW7AtdjdxPSGKTXwP', 'data-callback' => 'onSubmit']) !!} -->

@endsection

@section('scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
	function onComment(token) {
		console.log(token);
		document.getElementById("comment-form").submit();
	}
</script>
@endsection
