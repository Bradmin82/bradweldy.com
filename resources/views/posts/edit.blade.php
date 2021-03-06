@extends('main')

@section('title', '| Edit Post')

@section('stylesheets')

  {!! Html::style('css/select2.min.css') !!}

  <style type="text/css">
    .edit-post-img img {
      max-width: 100%;
    }
    .mce-branding-powered-by {
      display: none;
    }  
  </style>

  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=sa4303hwoxvky0hu2ttt20n8l6b5tchyy7dqb4r25pbxuczg"></script>
  <script>
      tinymce.init({
          selector: 'textarea',
          plugins: "link code image imagetools"
      });
  </script>

@endsection

@section('content')

  <div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
      <div class="col-md-8">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ["class" => 'form-control input-lg']) !!}

        {!! Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) !!}
        {!! Form::text('slug', null, ["class" => 'form-control input-lg']) !!}

        {!! Form::label('category_id', 'Category:', ['class' => 'form-spacing-top']) !!}
        {!! Form::select('category_id', $categories, $post->category_id, ['class' => 'form-control']) !!}

        {!! Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) !!}
        {!! Form::select('tags[]', $tags, null, ['class' =>'form-control select2-multi', 'multiple' => 'multiple']) !!}

        {!! Form::label('body', 'Body:', ['class' => 'form-spacing-top']) !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
      
      </div>

      <div class="col-md-4">
        <div class="well">
          
            <dl class="dl-horizontal">
              <dt>Create At:</dt>
              <dd>{{ date( 'M j, Y h:ia', strtotime($post->created_at)) }}</dd>
            </dl>

            <dl class="dl-horizontal">
              <dt>Last Updated:</dt>
              <dd>{{ date( 'M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
            </dl>
            <hr />
            <div class="row">
              <div class="col-sm-6">
                {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
              </div>
              <div class="col-sm-6">
                {!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) !!}
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center btn-h1-spacing">
                {!! Html::linkRoute('posts.show', 'Back To Posts', null, array('class' => 'btn btn-primary btn-block')) !!}
              </div>
            </div>

        </div>
        <div class="row">
          <div class="col-sm-12 text-center btn-h1-spacing edit-post-img">
            <?php if($post->image) { ?>
              <img src="{{ asset('images/' . $post->image) }}" />
            <?php } ?>
          </div>
        </div>
      </div>
    {!! Form::close() !!}
  </div>


@endsection

@section('scripts')

  {!! Html::script('js/select2.min.js') !!}

  <script type="text/javascript">
    
    $('.select2-multi').select2();
    $('.select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');

  </script>

@endsection
