@extends('main')

@section('title', '| Logout')

@section('content')

        <div class="row">
            <div class="col-md-12">
                {{-- {!! csrf_field() !!} --}}
              {!! Form::open() !!}  

                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}

                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', null, ['class' => 'form-control']) !!}

                {!! Form::checkbox('remember') !!}{!! Form::label('remember', "Remember Me") !!}

                {!! Form::submit() !!}

              {!! Form::close() !!}  

            </div>
        </div> <!-- end of header .row -->


@endsection