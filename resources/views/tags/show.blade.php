@extends('main')

@section('title', "| $tag->name Tag")

@section('content')

  <div class="row">
      <div class="col-md-8">
        <h1>Tag: {{ $tag->name }} <small>{{ $tag->posts()->count() }} Posts</small></h1>

      </div> <!-- end of .com-md-8 -->
      <div class="col-md-2">
        <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary btn-block pull-right tag-edit-spacing">Edit</a>
      </div>
      <div class="col-md-2">
          {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block tag-edit-spacing']) !!}
          {!! Form::close() !!}
      </div>
  </div> <!-- end of .row -->
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Tags</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tag->posts as $post)
          <tr>
            <th>{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>@foreach ($post->tags as $tag)
                <span class="label label-default">{{ $tag->name }}</span>
                @endforeach
            </td>
            <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-xs">View</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div> <!-- end of .row -->

@endsection
