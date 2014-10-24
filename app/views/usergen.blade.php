@extends('_master')

@section('title')
	User Generator
@stop

@section('head')

@stop

@section('h1')
  User Generator
@stop

@section('content')

  <?php echo "wantBirthdate:" . ($wantBirthdate ? "yes" : "no") . "<br/>\n"; ?>
  <?php echo "wantBlurb:" . ($wantBlurb ? "yes" : "no") . "<br/>\n"; ?>
  {{ Form::open(array('url' => '/userGen', 'method' => 'GET')) }}
    {{ Form::label('userCount', '# of users') }}
    {{ Form::input(
         'number', 
         'size', 
         $size, 
         array('min' => '1', 'max' => '99')) 
    }}
    <br/>

    {{ Form::checkbox('birthdate', 'yes', $wantBirthdate) }}
    {{ Form::label('birthdate', 'Create a Birthdate') }}
    <br/>
    {{ Form::checkbox('blurb', 'yes', $wantBlurb) }}
    {{ Form::label('blurb', 'Create a Blurb') }}
    <br/>
    {{ Form::submit('Generate'); }}
  {{ Form::close() }}

    <section id="generated_text">
    @foreach ($newUsers as $newUser)
      <p id='name'>{{$newUser->getName()}}</p>
      <p id='birthdate'>{{$newUser->getBirthdate()}}</p>
      <p id='blurb'>{{$newUser->getBlurb()}}</p>
    @endforeach
    </section>

  


@stop