@extends('main')

@section('title', '| DELETE Comment?')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="clear:both;">
			<h1>DELETE Comment?</h1>

			<p>
				<b>Name:</b> {{ $comment->name }}<br />
				<b>Email:</b> {{ $comment->email }}<br />
				<b>Comment:</b> {{ $comment->comment }}
			</p>

			{!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) !!}
				{!! Form::submit('YES DELETE THIS COMMENT', ['class' => 'btn btn-lg btn-block btn-danger']) !!}
			{!! Form::close() !!}

		</div>
	</div>

@endsection